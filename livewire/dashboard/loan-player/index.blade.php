<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="طلبات الاستعارة">

                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="basic_team_approve">
                            <input class="form-check-input" type="radio" id="basic_team_approve" value="{{ \App\Enums\LoanStatus::BasicTeamApprov->value }}" wire:model="status" /> في انتظار الموافقة
                            <i class="input-helper"></i>
                        </label>

                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="club_approve">
                            <input class="form-check-input" type="radio" id="club_approve" value="{{ \App\Enums\LoanStatus::ClubApprove->value }}" wire:model="status" /> في انتظار السداد
                            <i class="input-helper"></i>
                        </label>
                    </div>
                </div>

                <div class="preview-list mt-3">
                    <table class="table table-bordered mb-4">
                        <tr style="background-color:#ffe6cc;text-align:center;">
                            <td>الترتيب</td>
                            <td>اسم اللاعب</td>
                            <td> الفريق مقدم الطلب</td>
                            <td>الاجراء</td>
                        </tr>
                        @forelse ($loans as $index => $loan)
                            <tr style=text-align:center>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $loan->player->name }}</td>
                                <td>{{ $loan->sender->name }}</td>
                                <td>
                                    <a href="{{ route('dashboard.loan-players.show', $loan->id) }}" class="btn btn-info btn-sm" title="فتح الطلب">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"><div class="alert alert-info">لا يوجد بيانات لعرضها</div></td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                <x-slot name="paginate">
                    {{ $loans->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
