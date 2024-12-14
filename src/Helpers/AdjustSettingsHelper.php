<?php

namespace InterlinkTechsoft\LargeContentHandler\Helpers;

class AdjustSettingsHelper
{
    public static function applySettings()
    {
        ini_set('upload_max_filesize', '2G');
        ini_set('post_max_size', '2G');
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '0');
        ini_set('max_input_time', '0');
    }
}
