<?php

declare(strict_types=1);

namespace MoonShine\CKEditor\Providers;

use Illuminate\Support\ServiceProvider;

final class CKEditorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-ckeditor');


        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-ckeditor'),
        ], ['moonshine-ckeditor-assets', 'laravel-assets']);
    }
}
