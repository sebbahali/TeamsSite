<x-dashboard.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="المسابقات">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @ableTo('read-competitions')
                            <a class="btn btn-danger btn-sm mb-2" href="{{ route('dashboard.index') }}" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        @endableTo

                        @ableTo('create-competitions')
                            <a class="btn btn-primary btn-sm mb-2 mx-2" href="{{ route('dashboard.competitions.create') }}" title="اضافة مسابقة">
                                <i class="mdi mdi-plus"></i>
                            </a>
                        @endableTo
                        <a class="btn btn-danger btn-sm mb-2 mx-2" href="{{ route('dashboard.competitions.archive.index') }}" >
                            المسابقات المؤرشفة
                        </a>
                    </div>

                    <div class="row mt-4">
                        @forelse ($competitions as $competition)
                            <div class="col-md-6">
                                <div class="card mb-3 border" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{  $competition->logo }}" class="img-fluid rounded-start" style="width: 100%; height: 100%">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $competition->name }}</h5>
                                                <p class="card-text"><i class="mdi mdi-map-marker-radius"></i> {{ $competition->location }}</p>
                                                <div>
                                                    <a class="btn btn-sm btn-primary mt-2" href="{{ route('dashboard.competitions.display', $competition) }}">عرض</a>

                                                    @ableTo('read-competitions')
                                                        <a class="btn btn-sm btn-info mt-2" href="{{ route('dashboard.competitions.show', $competition) }}">تفاصيل</a>
                                                    @else
                                                        <button disabled class="btn btn-sm btn-info mt-2">تفاصيل</button>
                                                    @endif

                                                    @role('superadministrator')
                                                        @if ($competition->status == \App\Enums\CompetitionStatus::Draft)
                                                            <a class="btn btn-sm btn-warning mt-2" href="{{ route('dashboard.competitions.edit', $competition) }}">تعديل</a>

                                                            <form action="{{ route('dashboard.competitions.active', $competition) }}" method="POST"
                                                                style="display: inline-block">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-success mt-2">تنشيط</button>
                                                            </form>
                                                        @elseif($competition->status == \App\Enums\CompetitionStatus::Active)
                                                            <form action="{{ route('dashboard.competitions.un-active', $competition) }}" method="POST"
                                                                style="display: inline-block">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-danger mt-2">تعطيل</button>
                                                            </form>

                                                            <form action="{{ route('dashboard.competitions.send-to-mange', $competition) }}" method="POST"
                                                                style="display: inline-block">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-info mt-2">ارسال الى اللجنة</button>
                                                            </form>
                                                        @endif
                                                        <form action="{{ route('dashboard.competitions.archive.store', $competition) }}" method="POST"
                                                            style="display: inline-block">
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm archive-confirmation mt-2">أرشفة</button>
                                                        </form>
                                                    <form action="{{ route('dashboard.competitions.destroy', $competition) }}" method="POST"
                                                            style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm delete-confirmation mt-2">حذف</button>
                                                        </form>
                                                    @endrole

                                                    @role('competition_manger')
                                                        @if ($competition->status == \App\Enums\CompetitionStatus::SendToMange)
                                                            <a class="btn btn-sm btn-danger mt-2" href="{{ route('dashboard.competition-issues.index', ['competition' => $competition]) }}">الاحتجاجات</a>
                                                            <a class="btn btn-sm btn-info mt-2" href="{{ route('dashboard.competition-issues.message-index', ['competition' => $competition]) }}">المراسلات</a>
                                                        @endif

                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('dashboard.competition-matches.index', ['competition' => $competition]) }}">جدول المباريات</a>
                                                    @endrole
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info text-center">لا يوجد مسابقات لعرضها</div>
                        @endforelse
                    </div>

                    <x-slot name="paginate">
                        {{ $competitions->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
