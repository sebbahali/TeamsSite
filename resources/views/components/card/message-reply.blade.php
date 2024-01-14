@props(['dir' => 'rtl', 'title', 'body', 'time', 'image'])

<div class="card border-bottom" dir="{{ $dir }}">
    <div class="row g-0">
        <div class="col-md-1 col-3 text-center px-2 py-4">
            <img src="{{ $image }}" class="d-inline-block border rounded-circle" style="width: 60px; height: 60px;">
        </div>
        <div class="col-md-11 col-9 @if($dir == 'ltr') text-left @endif">
            <div class="my-4 mr-3">
                <h5 class="card-title mb-1">{{ $title }}</h5>
                <p class="card-text mb-1">{{ $body }}</p>
                <p class="card-text"><small class="text-muted">{{ $time }}</small>
                </p>
            </div>
        </div>
    </div>
</div>
