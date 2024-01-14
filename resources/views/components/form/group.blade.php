@props(['label', 'error' => null, 'for' => null])

<div
    x-data
    {{ $attributes->class([
        'form-group',
        'has-danger' => $error,
    ]) }}
>
    <label for="{{ $for ?? '' }}">{{ $label }}</label>

    {{ $slot }}

    @if ($error)
        <span class="error mt-2 text-danger">{{ $error }}</span>
    @endif
</div>
