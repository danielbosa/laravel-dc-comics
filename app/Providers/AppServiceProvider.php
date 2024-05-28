<?php

namespace App\Providers;

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
        // Leggi i dati dal file di configurazione
        $headerOptions = config('db.headerOptions');
        $footerMenu = config('db.footerMenu');

        // Condividi i dati con tutte le viste
        View::share('headerOptions', $headerOptions);
        View::share('footerMenu', $footerMenu);
    }
}
