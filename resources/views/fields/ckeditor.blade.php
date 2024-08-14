<x-moonshine::form.textarea
    ::id="$id('ckeditor')"
    x-data="ckeditor(`{{ route('moonshine.attachments') }}`)"
    :attributes="$element->attributes()->merge([
        'name' => $element->name()
    ])"
>{!! $value ?? '' !!}</x-moonshine::form.textarea>
