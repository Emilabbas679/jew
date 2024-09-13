<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function index()
    {
        return view('site.index');
    }

    public function category()
    {
        return view('site.category');
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

