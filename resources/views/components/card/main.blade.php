@props(['title' => null])
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="card-title my-3 mx-3 text-white">{{ $title ?? ''}}</h4>
    </div>
    <div
        {{
            $attributes->class(['card-body py-2'])
        }}
    >
        {{ $slot }}
    </div>

    {{ $paginate ?? '' }}
</div>
