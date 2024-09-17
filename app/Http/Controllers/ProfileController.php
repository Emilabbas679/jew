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


class ProfileController extends Controller
{

    public function favorites()
    {
        $favorites = Favorite::where('user_id', auth()->id())->with('product')->orderby('id', 'desc')->paginate(12);
        return view('site.profile.favorites', compact('favorites'));
    }


    public function profile()
    {
        return view('site.profile.index');
    }
}