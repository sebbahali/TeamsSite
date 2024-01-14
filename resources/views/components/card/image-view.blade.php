@props(['title' => null, 'src'])
<div class="card border bg-primary text-white text-center" style="height: 100%">
    <div class="card-header">
        {{ $title ?? "العنوان"}}
    </div>
    <div class="card-body p-0" style="border-radius: 0 0 4px 4px">
        <img src="{{ $src }}"
            style="width:100%; border-radius: 0 0 4px 4px; height: 100%;">
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-primary btn-sm" onclick="showModel('{{ $src }}')" title="معاينة الصورة">
            <i class="mdi mdi-eye"></i>
        </button>
    </div>
</div>
