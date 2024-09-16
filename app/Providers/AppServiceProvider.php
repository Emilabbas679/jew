<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.default');

        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user_id = auth()->id();
                $favorites = Cache::rememberForever("user:favorited_products:".$user_id, function () use ($user_id) {
                    return Favorite::where('user_id', $user_id)->select('product_id')->pluck('product_id')->toArray();
                });
                view()->share('global_user_favorites', $favorites);
            }
            else{
                view()->share('global_user_favorites', []);
            }
        });







    }
}
