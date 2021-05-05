<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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

//        برای به اشتراک گذاشتن متغیرهایی که در کل صفحه ما به آنها نیاز داریم
//        View::share([
//            'categories'=>Category::query()->where('category_id',null)->get(),
//            'brands'=>Brand::all(),
//        ]);
//     یا استفاده از دستور زیر
//        view()->share([
//            'categories'=>Category::query()->where('category_id',null)->get(),
//            'brands'=>Brand::all(),
//        ]);
//        با تابع composer ما می تونیم بگیم این متغییرها برای کدوم view ها اعمال بشه
//        view()->composer(['client.products.show', 'client.home'], function ($view) {
//            $view->with([
//                'categories' => Category::query()->where('category_id', null)->get(),
//                'brands' => Brand::all(),
//            ]);
//        });
//        برای اعمال در کل صفحات از * استفاده می کنیم

//        dd(Category::query()->where('category_id', null)->get()->toArray());
        view()->composer(['client.products.show', 'client.home'], function ($view) {
            $view->with([
                'categories' => Category::query()->where('category_id', null)->get(),
                'brands' => Brand::all(),
            ]);
        });
    }
}
