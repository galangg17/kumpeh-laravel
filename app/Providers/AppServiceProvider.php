<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
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
        if (config('app.env') === 'production' || request()->server('HTTP_X_FORWARDED_PROTO') === 'https') {
            URL::forceScheme('https');
        }

        View::composer('*', function ($view) {
            try {
                $siteSettings = SiteSetting::all()->pluck('value', 'key')->toArray();
            } catch (\Throwable $e) {
                $siteSettings = [];
            }
            $view->with('siteSettings', $siteSettings);
        });
    }
}
