@props(['data'])

@if ($data)
    {{ $data }}
@else
    {{ 'لا يوجد بيانات' }}
@endif
