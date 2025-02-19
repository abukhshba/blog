<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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

//        FilamentFabricator::registerStyles([
//            Vite::asset('resources/css/app.css')
//        ]);

//        FilamentFabricator::registerScripts([
//            Vite::asset('resources/js/app.js'), //vite
//        ]);

        $thisUrl = url()->current().'/';

        if (request()->segment(1) == 'en') {
            $newUrl    = str_replace('/en/', '/ar/', $thisUrl);
            $direction = 'ltr';
            $lang = 'ع';
        }else{
            $newUrl  = str_replace('/ar/', '/en/', $thisUrl);
            $direction = 'rtl';
            $lang = 'En';
        }

        Paginator::useTailwind();

        View::share([
            'homeUrl' => url('/'. request()->segment(1)),
            'secondLangUrl' => $newUrl,
            'secondLang' => $lang,
            'front_direction' => $direction,
        ]);
    }
}
