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
