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

        $this->publishes([
            __DIR__.'/config/arostech-mail.php' => config_path('arostech-mail.php'),
        ],'arostech-config-mail');
    }
}
