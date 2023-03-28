<?php

namespace App\Providers;

use App\Http\Middleware\GetUserCompanies;
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
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            /*
            *web
            */
            Route::middleware('web')
                ->middleware([GetUserCompanies::class])
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
            // ->middleware();
            ->group(base_path('routes/employe.php'));

            Route::middleware('web')
            // ->middleware();
            ->group(base_path('routes/admin.php'));


            Route::middleware('web')
            // ->middleware();
            ->group(base_path('routes/superAdmin.php'));


            /*
            *Settings
            */
            Route::middleware('web')
                ->group(base_path('routes/settings.php'));
            /*
            *rapports
            */
            Route::middleware('web')
                ->group(base_path('routes/rapports.php'));
        });

    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
