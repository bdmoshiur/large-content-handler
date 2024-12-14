# Large Content Handler

A Laravel package to handle large file uploads and remove PHP limitations.

## Features:
- **Automatic PHP Configuration Adjustment**: Dynamically modifies `php.ini` settings at runtime for optimal performance.
- **Unlimited File Uploads & Memory Usage**: Supports unlimited file upload sizes and memory usage by setting `upload_max_filesize`, `post_max_size`, and `memory_limit` to unlimited values.
- **Increased Input and File Upload Limits**: Increases `max_input_vars` to handle larger inputs and allows up to 100 simultaneous file uploads with `max_file_uploads`.
- **Customizable Session Settings**: Configures custom session lifetimes (`gc_maxlifetime`) and specifies the session save path for better session management.
- **Enhanced Error Handling**: Logs errors to a custom log file and disables error display in production for improved debugging and security.
- **Optimized OPCache**: Enables and fine-tunes OPCache settings to boost performance, including increased memory consumption and file acceleration limits.

## Installation:
```bash
composer require interlink-techsoft/large-content-handler
