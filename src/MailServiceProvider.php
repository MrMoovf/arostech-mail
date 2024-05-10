<?php

namespace Arostech\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {
    

    public function register()
    {
       $this->mergeConfigFrom(__DIR__.'/config/arostech-mail.php', 'arostech-mail');
    }

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
