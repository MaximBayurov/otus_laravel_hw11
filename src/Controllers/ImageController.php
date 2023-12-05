<?php
namespace Mbayurov\OtusLaravelHw11\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ImageController
{
    public function showForm(): \Illuminate\Contracts\View\View
    {
        $layout = config('hw11.layout');

        return View::make(
            'hw11::pages.upload-form',
            compact(['layout','layout'])
        );
    }

    public function upload(Request $request): RedirectResponse
    {
        $path = $request->file('image')->store(config('hw11.img_store_dir'));
        $layout = config('hw11.layout');
        return redirect()->route('hw11.form', compact(['path', 'layout']));
    }
}