<?php

namespace App\Providers;

use App\Models\Question;
use App\Models\Setting;
use App\Models\AboutUs;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        View::share('settings',Setting::first());
        View::share('about_us',AboutUs::first());
        View::share('slider',Slider::first());
        View::share('questions',Question::latest()->take(4)->get());
        Paginator::useBootstrap();

    }
}
