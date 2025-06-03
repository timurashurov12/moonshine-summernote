<?php

declare(strict_types=1);

namespace Timurashurov12\Summernote\Providers;

use Illuminate\Support\ServiceProvider;

final class SummernoteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views',
            'timurashurov12-summernote'
        );

        $this->publishes(
            [
                __DIR__ . '/../../public' => public_path('vendor/timurashurov12-summernote'),
            ],
            ['timurashurov12-summernote']
        );
    }
}
