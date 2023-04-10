<?php

declare(strict_types=1);

namespace MoonShine\CKEditor\Fields;

use MoonShine\Fields\Textarea;

final class CKEditor extends Textarea
{
    protected static string $view = 'moonshine-ckeditor::fields.ckeditor';

    protected array $assets = [
        'vendor/moonshine-ckeditor/js/ckeditor.js',
    ];
}
