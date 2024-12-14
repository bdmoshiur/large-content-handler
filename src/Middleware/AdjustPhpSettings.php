<?php

namespace InterlinkTechsoft\LargeContentHandler\Middleware;

use Closure;

class AdjustPhpSettings
{
    public function handle($request, Closure $next)
    {
        // File Upload Settings
        ini_set('upload_max_filesize', config('large-content.upload_max_filesize'));
        ini_set('post_max_size', config('large-content.post_max_size'));

        // Memory and Execution Settings
        ini_set('memory_limit', config('large-content.memory_limit'));
        ini_set('max_execution_time', config('large-content.max_execution_time'));
        ini_set('max_input_time', config('large-content.max_input_time'));

        // Input and Output Settings
        ini_set('max_input_vars', config('large-content.max_input_vars'));
        ini_set('max_file_uploads', config('large-content.max_file_uploads'));

        // Session Settings
        ini_set('session.gc_maxlifetime', config('large-content.session.gc_maxlifetime'));
        ini_set('session.save_path', config('large-content.session.save_path'));

        // Error Handling Settings
        ini_set('log_errors', config('large-content.log_errors'));
        ini_set('error_log', config('large-content.error_log'));
        ini_set('display_errors', config('large-content.display_errors'));

        // OPCache Settings
        ini_set('opcache.enable', config('large-content.opcache.enable'));
        ini_set('opcache.memory_consumption', config('large-content.opcache.memory_consumption'));
        ini_set('opcache.max_accelerated_files', config('large-content.opcache.max_accelerated_files'));
        ini_set('opcache.validate_timestamps', config('large-content.opcache.validate_timestamps'));

        return $next($request);
    }
}
