<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="المباريات">
                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="notStart">
                            <input class="form-check-input" type="radio" id="notStart" name="state" wire:model="state"
                                value="{{ \App\Enums\MatchStatus::NotStart->value }}" /> لم تبدء
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="started">
                            <input class="form-check-input" type="radio" id="started" name="state" wire:model="state"
                                value="{{ \App\Enums\MatchStatus::Started->value }}" /> جارية
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="end">
                            <input class="form-check-input" type="radio" id="end" name="state" wire:model="state"
                                value="{{ \App\Enums\MatchStatus::End->value }}" /> منتهية
                            <i class="input-helper"></i>
                        </label>
                    </div>
                     <div class="form-check mx-sm-2 align-self-end">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.competitions.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"> Back</i>
                        </a>
                    </div>
                </div>


                <div class="preview-list">
                    <table class="table table-bordered mb-5">
                        <tr>
                            <td>الترتيب</td>
                            <td>الفريق الاول</td>
                            <td>VS</td>
                            <td>الفريق الثاني</td>
                            <td>الاجراء</td>
                        </tr>
                        @forelse ($matches as $index => $match)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $match->homeTeam->name }}</td>
                                <td>{{ "$match->home_goals : $match->away_goals" }}</td>
                                <td>{{ $match->awayTeam->name }}</td>
                                <td>
                                    <a href="{{ route('frontend.competition-matches.show',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm" title="عرض"><i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="5">لا يوجد مباريات لعرضها</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                <x-slot name="paginate">
                    {{ $matches->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
