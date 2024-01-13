@aware(['error'])
@props(['name', 'type' => null, 'placeholder', 'id' => $id])

<input
    id="{{ $id }}"
    type="{{ $type ?? null }}"
    name="{{ $name }}"
    {{ $attributes->class([
        'form-control',
        'form-control-danger' => $error
    ]) }}
    placeholder="{{ $placeholder ?? '' }}"
>
