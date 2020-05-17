<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Inforcompany;
use App\Models\About;
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
        view()->share('infor',InforCompany::all());
        view()->share('about',About::all());
    }
}
