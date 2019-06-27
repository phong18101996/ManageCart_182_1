<?php

namespace App\Providers;
use Cart;
use App\Products;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts/menu',function($view){
            $content = Cart::content();
            $temp=0;
            foreach ($content as $v) {
                $temp+=$v->qty;
            }
            $view->with('content',$content)
            ->with('temp',$temp);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
