<?php

namespace Oaattia\MissingTranslation;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class MissingTranslationServiceProvider extends ServiceProvider
{
    /**
     * Boot the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Helper::class, function () {
            return new Helper(
                new Filesystem(),
                $this->app
            );
        });
    }
}
