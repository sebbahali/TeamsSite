<x-frontend.layouts.app>
    <x-slot name="title">الاحتجاجات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">وقت الرسالة : {{ $competitionIssue->created_at->toDateTimeString() }}
                            </div>

                            {{-- <div class="col-5">رقم الرسالة :
                                {{ messageNumber($message_code, $message->created_at->year, $message->orderInYear()) }}
                            </div> --}}
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-8"><span>الفاضل : </span> {{ $competitionIssue->reciver()->name }}</div>
                            <div class="col-4">المحترم</div>
                        </div>

                        <h4 class="h2 text-center text-danger my-5">
                            <u><span>الموضوع : </span> {{ $competitionIssue->subject }}</u>
                        </h4>
                       <div style="overflow: auto;font-size:14px;border: 2px solid DarkGray; text-align:center;    
  border-radius: 12px;   
  margin: 30px;  
  padding: 30px;  
  outline-offset: 0.5em;">{!! $competitionIssue->body !!}</div>

                        @if ($competitionIssue->file)
                            <div class="text-center mt-5">
                                <a href="{{$competitionIssue->file}}" class="btn btn-primary" download><i
                                        class="mdi mdi-cloud-download"></i> تنزيل المرفق</a>
                            </div>
                        @endif

                        <div class="col-12 mt-5">المرسل : {{ ($competitionIssue->sender->value == \App\Enums\CompetitionIssueSender::Team->value) ? $competitionIssue->sender()->name : 'لجنة المسابقات' }} </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        @foreach ($competitionIssue->replys as $reply)
                            <x-card.message-reply
                                dir="{{ ($reply->sender->value == \App\Enums\CompetitionIssueSender::Team->value) ? 'rtl' : 'ltr' }}"
                                image="{{ $reply->sender()->logo }}"
                                title="{{ ($reply->sender->value == \App\Enums\CompetitionIssueSender::Team->value) ? 'انت' : $reply->sender()->name }}"
                                body="{{ $reply->body }}"
                                time="{{ $reply->created_at->diffForHumans() }}"
                            />
                        @endforeach

                        @if ($competitionIssue->status == \App\Enums\CompetitionIssueStatus::Open)
                            <livewire:frontend.competition-issues.add-reply :issue="$competitionIssue" />
                        @else
                            <div class="alert alert-info text-center">الشكوى مغلقة</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
