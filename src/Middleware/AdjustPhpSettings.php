<?php

namespace InterlinkTechsoft\LargeContentHandler\Middleware;

use Closure;

class AdjustPhpSettings
{
    public function handle($request, Closure $next)
    {
        // Adjust PHP settings to unlimited or custom values
        ini_set('upload_max_filesize', config('large-content.upload_max_filesize'));
        ini_set('post_max_size', config('large-content.post_max_size'));
        ini_set('memory_limit', config('large-content.memory_limit'));
        ini_set('max_execution_time', config('large-content.max_execution_time'));
        ini_set('max_input_time', config('large-content.max_input_time'));

        return $next($request);
    }
}
