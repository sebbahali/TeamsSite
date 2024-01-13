<?php

namespace App\Providers;

use App\Models\Club;
use App\View\Components\Frontend\Includes\Navbar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('ableTo', function ($action) {
            if (auth()->check()) {
                return optional(auth()->user())->isAbleTo($action);
            } else {
                return false;
            }
            
        });

        View::composer(['includes.footer', 'includes.navbar'], function ($view) {
            $view->with('club', Club::first());
        });
    }
}
