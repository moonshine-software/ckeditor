<?php

declare(strict_types=1);

namespace MoonShine\CKEditor\Fields;

use MoonShine\Fields\Textarea;

final class CKEditor extends Textarea
{
    protected string $view = 'moonshine-ckeditor::fields.ckeditor';

    protected array $assets = [
        'vendor/moonshine-ckeditor/css/ckeditor.css',
        'vendor/moonshine-ckeditor/js/ckeditor.js',
        'vendor/moonshine-ckeditor/js/ckeditor-init.js',
    ];
}
