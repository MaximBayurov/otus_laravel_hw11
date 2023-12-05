<?php

namespace Mbayurov\OtusLaravelHw11\Services\RenderService;

use Img2Ascii\Processor;

class AsciiRenderService implements RenderService
{

    public function renderText(string $path): string
    {
        try {
            $processor = new Processor($path);
            // If you want to have some more control over the output:
            return $processor
                ->asciify(5)                      // pixel width per char
                ->result('#@Mm+:-.')              // Chars to use, from darkest to lightest
                ->getText();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return '';
        }
    }

    public function renderHtml(string $path): string
    {
        try {
            $processor = new Processor($path);

            return $processor
                ->asciify(10)
                ->colorResult('#')
                ->getText('<br/>');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return '';
        }
    }
}