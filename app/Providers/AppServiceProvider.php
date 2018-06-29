<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\allCatagory;
use View;
use App\Shironam;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer('growing.Home.home',function($view){
          $publishedCategory=allCatagory::all();
          $view->with('publishCategory',$publishedCategory);
      });
        View::composer('growing.category.ProthomPage',function($view){
          $shironams=Shironam::where('publicationStatus',0)->get();
          $view->with('shironam',$shironams);
      });
   
    View::composer('growing.Home.home',function($view){
          $shironams=Shironam::where('publicationStatus',0)->get();
          $view->with('shironam',$shironams);
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
