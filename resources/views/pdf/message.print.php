@extends('pdf.layout')

@section('title')
    رسالة
@endsection

@section('content')
    
        <div class="col-6">
         
            <p>نادي قريات الرياضي</p>
            <p>مجلس ادارة النادي</p>
            <p>محضر اجتماع</p>
        </div>
        
    <div class="row border-bottom border-top">
        <div class="col-6 mt-3">
            <p>وقت الرسالة : {{ $message->created_at->toDateTimeString() }}</p>
            <p>رقم الرسالة : {{ messageNumber($message_code, $message->created_at->year, $message->orderInYear()) }}</p>
        </div>
        <div class="col-6 mt-3">
            <p>الفاضل : {{  $message->target->value }}</p>
            <p>الموضوع : {{ $message->subject }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4 pb-4 border-bottom">
            {!! $message->body !!}
        </div>
    </div>
    
@endsection

@include('pdf.pscript')
