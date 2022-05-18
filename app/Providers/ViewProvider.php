<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Cart;
use Illuminate\Support\Facades\Auth;
 
class ViewProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.header', function ($view) {
            $cartItems = [];
            if (Auth::user()) {
                $cartItems = Cart::where('user_id', Auth::id())->get();
            }
            $view->with('minicartitems', $cartItems);
        });
        View::composer('shoppage.header', function ($view) {
            $cartItems = [];
            if (Auth::user()) {
                $cartItems = Cart::where('user_id', Auth::id())->get();
            }
            $view->with('minicartitems', $cartItems);
        });
    }
}