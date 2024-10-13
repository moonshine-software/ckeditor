<?php

declare(strict_types=1);

namespace MoonShine\CKEditor\Fields;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Textarea;

final class CKEditor extends Textarea
{
    protected string $view = 'moonshine-ckeditor::fields.ckeditor';

    protected string $attachmentRoute = '';

    public function getAssets(): array
    {
        return [
            Css::make('vendor/moonshine-ckeditor/css/ckeditor.css'),
            Js::make('vendor/moonshine-ckeditor/js/ckeditor.js'),
            Js::make('vendor/moonshine-ckeditor/js/ckeditor-init.js'),
        ];
    }

    public function attachmentRoute(string $route): self
    {
        $this->attachmentRoute = $route;

        return $this;
    }

    protected function viewData(): array
    {
        return [
            'attachmentRoute' => $this->attachmentRoute
        ];
    }
}
