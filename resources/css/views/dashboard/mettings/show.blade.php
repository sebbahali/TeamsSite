<x-dashboard.layouts.app>
    <x-slot name="title">المحضر</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main class="p-3" title="محضر رقم : {{ $metting->number }}">
                    @role('superadministrator')
                        <div class="form-inline d-flex align-items-center border-bottom mb-2">
                            @if ($metting->status == \App\Enums\MettingStatus::Draft)
                                <div class="form-check mx-sm-2">
                                    <a class="btn btn-info btn-sm" href="{{ route('dashboard.mettings.update-status', ['metting' => $metting->id, 'status' => \App\Enums\MettingStatus::SendToMember->value]) }}" title="ارسال للاعضاء"><i class="mdi mdi-send"></i></a>
                                </div>
                            @endif
                            @if ($metting->status != \App\Enums\MettingStatus::Approve)
                                <div class="form-check mx-sm-2">
                                    <a class="btn btn-success btn-sm mx-1" href="{{ route('dashboard.mettings.update-status', ['metting' => $metting->id, 'status' => \App\Enums\MettingStatus::Approve->value]) }}" title="اعتماد المحضر"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                </div>
                            @endif
                            <div class="form-check">
                                <a class="btn btn-primary btn-sm mx-1" href="{{ route('dashboard.mettings.print', $metting) }}" target="_blank" title="طباعة"><i class="mdi mdi-file"></i></a>
                            </div>
                        </div>
                    @endrole

                    <table class="table table-bordered mt-3">
                        <tr>
                            <td>الحالة</td>
                            <td>{{ mettingStatus($metting->status) }}</td>
                        </tr>
                        <tr>
                            <td>الموعد</td>
                            <td>
                                <span class="d-block"> تم عقد اجتماع في يوم : {{ $metting->day->value }}</span>
                                <span class="d-block my-3"> الموافق : {{ $metting->date }}</span>
                                <span class="d-block"> في تمام الساعة :  {{ $metting->time }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>المكان</td>
                            <td>{{ $metting->location }}</td>
                        </tr>
                        <tr>
                            <td>الحضور</td>
                            <td>
                                @foreach ($attendees as $user)
                                    <span class="d-block my-2"><i class="mdi mdi-account"></i> {{ $user->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                    <div class="my-4">
                        <h4 class="mb-4">القرارات</h4>
                        <div>{!! $metting->body !!}</div>
                    </div>
                </x-card.main>
                <div class="my-4"></div>
                <x-card.main class="p-0" title="تعليقات مجلس الادارة">
                    @foreach ($replys as $reply)
                        <x-card.message-reply
                            dir="{{ ($reply->user_id == auth('web')->user()->id) ? 'rtl' : 'ltr' }}"
                            image="{{ getImg('teams/' . $reply->user->name) }}"
                            title="{{ ($reply->user_id == auth('web')->user()->id) ? 'انت' : $reply->user->name }}"
                            body="{{ $reply->body }}"
                            time="{{ $reply->created_at->diffForHumans() }}"
                        />
                    @endforeach

                    @if ($metting->status == \App\Enums\MettingStatus::SendToMember)
                        <livewire:dashboard.mettings.add-reply :metting="$metting" />
                    @endif
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
