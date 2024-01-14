@aware(['error'])
@props(['name', 'placeholder', 'id' => null, 'value' => null])

<textarea
    id="{{ $id ?? '' }}"
    name="{{ $name }}"
    {{ $attributes->class([
        'form-control',
        'form-control-danger' => $error
    ]) }}
    placeholder="{{ $placeholder ?? '' }}"
>{!! $value ?? '' !!}</textarea>
