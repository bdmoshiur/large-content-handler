<?php

return [
    // File Upload Settings
    'upload_max_filesize' => '0', // Unlimited
    'post_max_size' => '0', // Unlimited

    // Memory and Execution Settings
    'memory_limit' => '-1', // Unlimited
    'max_execution_time' => 0, // Unlimited
    'max_input_time' => 0, // Unlimited

    // Input and Output Settings
    'max_input_vars' => 10000, // You can keep this as is, as it’s a reasonable limit
    'max_file_uploads' => 100, // You can also keep this based on your use case, or set it higher if needed

    // Session Settings
    'session.gc_maxlifetime' => 86400, // 1 day (keep as is for a long session lifetime)
    'session.save_path' => '/tmp', // Ensure this is accessible

    // Error Handling Settings
    'log_errors' => 'On', // Keep logging enabled for debugging
    'error_log' => '/var/log/php_errors.log',
    'display_errors' => 'Off', // Hide errors in production

    // OPCache Settings
    'opcache.enable' => '1',
    'opcache.memory_consumption' => '512', // Increased memory allocation for opcache
    'opcache.max_accelerated_files' => 100000, // Increased file limit for opcache
    'opcache.validate_timestamps' => '0',
];
