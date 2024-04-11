<?php

namespace Arostech\Mail;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // bro what
        $this->loadViewsFrom(__DIR__.'/views/emails', 'arostech');
    }
}
