<?php

namespace Mbayurov\OtusLaravelHw11;

use Illuminate\Support\ServiceProvider;

class OtusLaravelHw11ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
    }
}