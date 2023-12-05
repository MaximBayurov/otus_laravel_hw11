<?php

namespace Mbayurov\OtusLaravelHw11\Services\RenderService;

use Illuminate\Contracts\Foundation\Application;

class RenderServiceProvider
{
    public function register()
    {
        $this->app->singleton(RenderService::class, function (Application $app) {
            return new AsciiRenderService();
        });
    }
}