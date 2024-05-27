<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages/guest'))->uri('/')->middleware([
            '*' => [
                'guest'
            ],
        ]);

        Folio::path(resource_path('views/pages/auth'))->uri('/')->middleware([
            '*' => [
                'auth'
            ],
        ]);
    }
}
