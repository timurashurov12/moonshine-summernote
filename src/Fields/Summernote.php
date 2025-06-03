<?php

declare(strict_types=1);

namespace Timurashurov12\Summernote\Fields;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Textarea;

final class Summernote extends Textarea
{
    protected string $view = 'timurashurov12-summernote::fields.summernote';

    protected string $attachmentEndpoint = '';

    protected function assets(): array
    {
        return [
            Js::make('https://code.jquery.com/jquery-3.5.1.min.js'),
            Css::make('https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css'),
            Js::make('https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js'),
            Css::make('vendor/timurashurov12-summernote/css/style.css'),
            Js::make('vendor/timurashurov12-summernote/js/script.js')->customAttributes([
                'type' => 'module'
            ]),
        ];
    }

    public function attachmentEndpoint(string $value): self
    {
        $this->attachmentEndpoint = $value;

        return $this;
    }

    protected function viewData(): array
    {
        return [
            'attachmentEndpoint' => $this->attachmentEndpoint
        ];
    }
}
