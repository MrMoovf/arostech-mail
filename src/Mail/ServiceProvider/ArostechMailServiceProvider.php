<?php

namespace Arostech\Mail\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/views/emails', 'arostech');
    }
}
