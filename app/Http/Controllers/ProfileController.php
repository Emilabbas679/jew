<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Material;
use App\Models\Designer;
use App\Models\Color;
use App\Models\Occasion;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{

    public function favorites()
    {
        $favorites = Favorite::where('user_id', auth()->id())->with('product')->orderby('id', 'desc')->paginate(12);
        return view('site.profile.favorites', compact('favorites'));
    }


    public function password(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|max:255',
            'new_password' => 'required|min:8|max:255',
        ]);

        $user = auth()->user();
        if(password_verify( $request->password,$user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
        }
        return redirect()->route('profile')->with('success', __('site.success'));
    }

    public function profile(Request $request)
    {
        if ($request->method() == 'POST') {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required',
                'phone' => 'required',
            ]);


            try {
                $user = auth()->user();
                $user->name = $request->name;
                $user->email = $request->email;
                $phone = $request->phone;
                $phone = str_replace(' ', '', str_replace('+', '', str_replace('(', '', str_replace(')','', $phone))));
                $user->phone = (int) $phone;
                $user->save();
                return redirect()->route('profile')->with('success', __('site.success'));

            } catch (\Exception $e) {
                return redirect()->route('profile')->with('error', __('site.something_went_wrong'));
            }
        }


        return view('site.profile.index');
    }

    public function cartDelete(Request $request)
    {
        $validated = $request->validate([
            'cart_id' => 'required|integer',
        ]);
        $cart = Cart::where('user_id', auth()->id())->where('id', $request->cart_id)->delete();
        return response()->json(['status' => 'success']);
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'delivery_date' => 'required|date',
            'return_date' => 'required|date',
            'product_id' => 'required|integer',
        ]);
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'delivery_date' => date('Y-m-d', strtotime($request->delivery_date)),
            'return_date' => date('Y-m-d', strtotime($request->return_date)),
        ]);
        return redirect()->route('profile.cart');
    }

    public function cart(Request $request)
    {
        $items = Cart::where('user_id', auth()->user()->id)->orderby('id', 'desc')->with('product')->get();
        $prices = [
            'total' => 0,
            'total_price' => 0,
        ];
        foreach ($items as $item) {

            $end = strtotime($item->return_date);
            $start = strtotime($item->delivery_date);
            $diffInSeconds = $end - $start;
            $diffInDays = $diffInSeconds / (60 * 60 * 24);

            $prices['total'] += $item->product->price * $diffInDays;
            if ($item->product->sale_price != 0 and $item->product->sale_price != null){
                $prices['total_price'] += $item->product->sale_price * $diffInDays;
            }
            else
                $prices['total_price'] += $item->product->price * $diffInDays;

        }
        return view('site.profile.cart', compact('items', 'prices'));
    }


}
