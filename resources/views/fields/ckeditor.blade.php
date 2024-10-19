<x-moonshine::form.textarea
    ::id="$id('ckeditor')"
    x-data="ckeditor(`{{ $attachmentEndpoint }}`)"
    :attributes="$attributes"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
