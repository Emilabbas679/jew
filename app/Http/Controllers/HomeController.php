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
        $categories = Category::where('category_id', null)->where('status', 1)->limit(4)->get();
        return view('site.index', compact('categories'));
    }

    public function category()
    {
        return view('site.category');
    }

    public function products(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $materials = Material::where('status', 1)->get();
        $occasions = Occasion::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        $designers = Designer::where('status', 1)->get();
        return view('site.products', compact('materials', 'categories','occasions', 'colors', 'designers', 'request'));
    }

    public function notFound()
    {
        return view('site.404');
    }

    public function noProduct()
    {
        return view('site.no-product');
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

