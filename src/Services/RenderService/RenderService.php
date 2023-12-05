<?php

namespace Mbayurov\OtusLaravelHw11\Services\RenderService;

interface RenderService
{
    public function renderText(string $path): string;
    public function renderHtml(string $path): string;
}