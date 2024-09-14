<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Product;
use App\Models\Material;
use App\Models\Designer;
use App\Models\Color;
use App\Models\Occasion;

class HomeController extends Controller
{
   public function index()
    {
        $categories = Category::select('id','title', 'category_id', 'image')->where('category_id', null)->where('status', 1)->limit(4)->get();
        $products = Product::select('id', 'title', 'price', 'sale_price','cover')->where('status', 1)->orderby('id', 'desc')->limit(6)->get();
        return view('site.index', compact('categories', 'products'));
    }


    public function products(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $materials = Material::where('status', 1)->get();
        $occasions = Occasion::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $designers = Designer::where('status', 1)->get();
        $products = Product::query();
        $products->where('status', 1);
        $products->select('id', 'title', 'cover', 'price', 'sale_price');
        if ($request->has('category_id') and strlen($request->category_id) > 0)
            $products->where('category_id', ((int) $request->category_id));
        if ($request->has('occasion_id') and strlen($request->occasion_id) > 0)
            $products->where('occasion_id', ((int) $request->occasion_id));
        if ($request->has('material_id') and strlen($request->material_id) > 0)
            $products->where('material_id', ((int) $request->material_id));
        if ($request->has('colors') and is_array($request->colors))
            $products->wherein('color_id', $request->colors);
        if ($request->has('designer_id') and is_array($request->designers))
            $products->wherein('designer_id', $request->designers);
        if ($request->has('sort')) {
            if ($request->sort == 1)
                $products->orderby('id', 'desc');
            else
                $products->orderby('price', 'desc');
        }
        else
            $products->orderby('id', 'desc');
        $products = $products->paginate(12);
        return view('site.products', compact('materials', 'categories','occasions', 'colors', 'designers', 'request', 'products'));
    }

    public function notFound()
    {
        return view('site.404');
    }



    public function product()
    {
        return view('site.product');
    }

    public function locale($lang)
    {
        if (in_array($lang, ['en', 'az', 'ru'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
            session(['locale' => $lang]);
        }
        return redirect()->back();
    }
}

