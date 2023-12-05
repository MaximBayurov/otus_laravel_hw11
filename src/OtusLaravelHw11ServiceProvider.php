<?php

namespace Mbayurov\OtusLaravelHw11;

use Illuminate\Support\ServiceProvider;

class OtusLaravelHw11ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/hw11.php', 'hw11');

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'hw11');
    }
}