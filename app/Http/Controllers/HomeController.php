<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Material;
use App\Models\Designer;
use App\Models\Color;
use App\Models\Occasion;
use Illuminate\Support\Facades\Cache;


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



    public function product($id)
    {
        $product = Product::where('id', $id)->where('status', 1)->with('category', 'color', 'material', 'designer', 'occasion')->firstorfail();
        $product->hits += 1;
        $product->save();
        if ($product->files != null)
            $product->files = json_decode($product->files, 1);
        else
            $product->files = [];
        $other_products = Product::where('id', "<>", $id)->where('status', 1)->where('category_id', $product->category_id)->orderby('id', 'desc')->limit(6)->get();

        $reserved_dates = [];
        $reserved = OrderItem::wherein('status', [1,2,3])->where('product_id', $product->id)->select('delivery_date', 'return_date')->get();
        foreach ($reserved as $item) {
            if ($item->delivery_date != null and $item->return_date != null and strtotime($item->return_date) >= strtotime($item->delivery_date)) {
                $start_timestamp = strtotime($item->delivery_date);
                $end_timestamp = strtotime($item->return_date);
                $end_timestamp -= 86400;
                $current_timestamp = $start_timestamp;
                while ($current_timestamp <= $end_timestamp) {
                    $reserved_dates[] = date('Y-m-d', $current_timestamp);
                    $current_timestamp += 86400;
                }
            }
        }
        return view('site.product', compact('product', 'other_products', 'reserved_dates'));
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

    public function productFavorite(Request $request)
    {

        $validated = $request->validate([
            'action' => 'required|string|max:255',
            'product_id' => 'required|integer',
        ]);

       if (auth()->id() != 0) {
           if (in_array($request->action, ['create', 'delete']) and $request->product_id >0) {
                if ($request->action == 'create')
                    Favorite::create(['user_id' => auth()->id(), 'product_id' => $request->product_id]);
                else
                    Favorite::where('user_id', auth()->id())->where('product_id', $request->product_id)->delete();
               Cache::forget("user:favorited_products:".auth()->id());
               return response()->json([
                   'status' => 'success',
                   'message' => __('site.successfully_changed')
               ]);
           }
           else{
               return response()->json([
                   'status' => 'error',
                   'message' => __('site.product_not_defined')
               ]);
           }
       }
       else{
           return response()->json([
               'status' => 'error',
               'message' => __('site.you_have_to_login')
           ]);
       }


        dd($request->all());
    }

    public function favorites()
    {
        return view('site.favorites');
    }

    public function myAccount()
    {
        return view('site.my-account');
    }

    public function cart()
    {
        return view('site.cart');
    }

    public function about()
    {
        return view('site.about');
    }

    public function faq()
    {
        return view('site.faq');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function blogView()
    {
        return view('site.blog-view');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function orders()
    {
        return view('site.orders');
    }

}

