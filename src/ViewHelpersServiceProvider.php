<?php

namespace DBlackborough\ViewHelpers;

use Illuminate\Support\ServiceProvider;

class ViewHelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'viewhelpers');
    }
}
