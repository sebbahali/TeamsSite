<x-dashboard.layouts.app>
    <x-slot name="title">الرسائل</x-slot>

    <div class="container">
        <div class="row">
            <div class="card-header bg-primary">
            
           
           <h4 style=text-align:center class="card-title my-3 mx-3 text-white">رسالة من : {{ $message->senderUser()->name }}</h4>
            
                        <a class="btn btn-success btn-sm mb-2" href="{{ route('dashboard.club-messages.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                        
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div style=font-size:15px class="col-7">وقت الرسالة : {{ $message->created_at->toDateTimeString() }}
                            </div>

                            <div style=font-size:15px class="col-5">رقم الرسالة :
                                {{ messageNumber(auth('web')->user()->club->message_code, $message->created_at->year, $message->orderInYear()) }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div style=font-size:15px class="col-8"><span>الفاضل : </span> {{ $message->receiverUser()->name }}</div>
                            <div style=font-size:15px class="col-4">المحترم</div>
                        </div>

                        <h4 class="h2 text-center text-danger my-5">
                            <u style=font-size:18px><span>الموضوع : </span> {{ $message->subject }}</u>
                        </h4>
                        <div style="overflow-x: auto; font-size:14px;border: 3px solid DarkGray; text-align:center;    
  border-radius: 12px;   
  margin: 30px;  
  padding: 30px;  
  outline-offset: 0.5em;">{!! $message->body !!}</div>

                        @if ($message->file)
                            <div class="text-center mt-5">
                                <a href="{{$message->file }}" class="btn btn-primary" download><i
                                        class="mdi mdi-cloud-download"></i> تنزيل المرفق</a>
                            </div>
                        @endif

                        <div  style=font-size:15px class="col-12 mt-5">المرسل : {{ $message->senderUser()->name }} </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        @foreach ($message->replys as $reply)
                            <x-card.message-reply
                                dir="{{ ($reply->user_id == auth('web')->user()->id) ? 'rtl' : 'ltr' }}"
                                image="{{ $reply->user->logo }}"
                                title="{{ ($reply->user_id == auth('web')->user()->id) ? 'انت' : $reply->user->name }}"
                                body="{{ $reply->body }}"
                                time="{{ $reply->created_at->diffForHumans() }}"
                            />
                        @endforeach

                        <livewire:dashboard.club-messages.add-reply :message="$message" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
