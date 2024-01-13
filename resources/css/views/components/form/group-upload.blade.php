@props(['label', 'error' => null, 'name', 'placeholder'])

<div
    x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
    {{ $attributes->class([
        'form-group',
        'has-danger' => $error,
    ]) }}
>
    <label for="{{ $name }}">{{ $label }}</label>

    <input
        id="{{ $name }}"
        type="file"
        wire:model="{{ $name }}"
        name="{{ $name }}"
        class="form-control @if($error) form-control-danger @endif"
        placeholder="{{ $placeholder ?? '' }}"
    >

    <div x-show="isUploading" class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
            :style="'width: ' + progress + '%'"></div>
    </div>

    @if ($error)
        <span class="error mt-2 text-danger">{{ $error }}</span>
    @endif
</div>
