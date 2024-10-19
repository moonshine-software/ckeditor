# CKEditor field for [MoonShine Laravel admin panel](https://moonshine-laravel.com)

### Requirements

- MoonShine v3.0+

### Support MoonShine versions

| MoonShine   | CKEditor |
|-------------|----------|
| 1.0+        | 1.0+     |
| 2.0+        | 2.0+     |
| 3.0+        | 3.0+     |

## Installation
```shell
composer require moonshine/ckeditor
```

## Usage

```php
use MoonShine\CKEditor\Fields\CKEditor;

CKEditor::make('Label')
```

## Attachments

```php
CKEditor::make('Label')->attachmentEndpoint(route('your-attachment-route'))
```
