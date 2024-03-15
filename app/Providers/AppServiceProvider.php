<?php

namespace App\Providers;

use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\Browsershot\Browsershot;
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
        Pdf::default()
            ->withBrowsershot(function (Browsershot $browsershot) {
                $browsershot->setOption('addLaunchArgs', ['--disable-dev-shm-usage'])->setOption('args', ['--no-sandbox'])->setChromePath('/usr/bin/chromium');
            });
    }
}
