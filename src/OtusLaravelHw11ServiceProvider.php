<?php

namespace Mbayurov\OtusLaravelHw11;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class OtusLaravelHw11ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/hw11.php', 'hw11');

        View::composer(config('hw11.prefix') . '/*', function ($view) {
            $view->with('hw11_layout', config('hw11.layout') );
        });

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'hw11');
    }
}