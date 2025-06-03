# Summernote поле для [MoonShine Laravel admin panel](https://moonshine-laravel.com)

Документация [Summernote](https://summernote.org/) 

### Requirements

- MoonShine v3.0+ 
  
### Support MoonShine versions

| MoonShine   | Summernote |
|-------------|------------|
| 3.0+        | 0.9.1      |

## Installation

```shell
composer require timurasurov12/summernote
```

## Usage

```php
use MoonShine\CKEditor\Fields\CKEditor;

Summernote::make('Label')
```

## Attachments

```php
Summernote::make('Label')->attachmentEndpoint(route('your-attachment-route'))
```
