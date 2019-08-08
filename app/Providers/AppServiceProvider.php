<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Cart;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //compose all the views....
        view()->composer('*', function ($view) 
        {
            if(Auth::check()){
                $cart = Cart::where('user_id', Auth::user()->id);

                //...with this variable
                $view->with('_cart', $cart );    
            }
        });  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
