<?php

namespace InterlinkTechsoft\LargeContentHandler;

use Illuminate\Support\ServiceProvider;
use InterlinkTechsoft\LargeContentHandler\Middleware\AdjustPhpSettings;

class LargeContentHandlerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/Config/large-content.php' => config_path('large-content.php'),
        ]);

        // Register middleware
        app('router')->aliasMiddleware('adjust-php-settings', AdjustPhpSettings::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/large-content.php', 'large-content'
        );
    }
}
