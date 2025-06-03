<x-moonshine::form.textarea
    :attributes="$attributes"
    {{ $attributes->merge(['class' => 'summernote']) }}
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
