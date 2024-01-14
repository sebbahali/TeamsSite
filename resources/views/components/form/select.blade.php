@aware(['error'])
@props(['name', 'placeholder', 'id' => null])

<select
    id="{{ $id ?? '' }}"
    name="{{ $name }}"
    {{ $attributes->class([
        'form-control p-4',
        'form-control-danger' => $error
    ]) }}
    placeholder="{{ $placeholder ?? '' }}"
>{{ $slot }}</select>
