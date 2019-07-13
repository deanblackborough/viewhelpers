<?php

namespace DBlackborough\ViewHelpers;

use Illuminate\Support\ServiceProvider;

class ViewHelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'view-helpers');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/view-helpers')
        ]);
    }

    public function register()
    {

    }
}
