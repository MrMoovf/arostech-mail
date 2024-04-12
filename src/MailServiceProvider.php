<?php

namespace Arostech\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/views/emails', 'arostech');

        echo __DIR__.'/config/arostech-mail.php';
        $this->publishes([
            __DIR__.'/config/arostech.php' => config_path('arostech.php'),
        ]);
    }
}
