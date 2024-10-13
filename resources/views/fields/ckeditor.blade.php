<x-moonshine::form.textarea
    ::id="$id('ckeditor')"
    x-data="ckeditor(`{{ $attachmentRoute }}`)"
    :attributes="$attributes"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
