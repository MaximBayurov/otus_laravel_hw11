<?php

namespace Mbayurov\OtusLaravelHw11\Controllers;

use Illuminate\Http\Request;
use Mbayurov\OtusLaravelHw11\Services\RenderService\RenderService;
use View;

class RenderController
{
    public function renderText(Request $request, RenderService $renderService): \Illuminate\Contracts\View\View
    {
        $fullPath = \Storage::path($request->get('path'));

        return View::make('hw11::rendered-text', ['rendered' => $renderService->renderText($fullPath)]);
    }

    public function renderHtml(Request $request, RenderService $renderService)
    {
        $fullPath = \Storage::path($request->get('path'));

        return View::make('hw11::rendered-html', ['rendered' => $renderService->renderHtml($fullPath)]);
    }
}