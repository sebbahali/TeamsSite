<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $dashboardNamespace = 'App\\Http\\Controllers\\Dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $frontendNamespace = 'App\\Http\\Controllers\\Frontend';

    protected $teamApiNamespace = 'App\\Http\\Controllers\\API';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));


            Route::domain(env('FRONTEND_URL'))
                ->prefix('api/v1')
                ->middleware('api')
                ->namespace($this->teamApiNamespace)
                ->group(base_path('routes/api/v1.php'));

            Route::domain(env('DASHBOARD_URL'))
                ->name('dashboard.')
                ->middleware('web')
                ->namespace($this->dashboardNamespace)
                ->group(base_path('routes/dashboard.php'));

            Route::domain(env('FRONTEND_URL'))
                ->name('frontend.')
                ->middleware('web')
                ->namespace($this->frontendNamespace)
                ->group(base_path('routes/frontend.php'));

            Route::domain(env('DASHBOARD_URL'))
                ->name('laratrust.')
                ->group(base_path('routes/laraturst.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
