<x-dashboard.layouts.app>
    <x-slot name="title">ادارات النادي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="ادارات النادي">

                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @if (\App\Models\ClubMange::existActiveMange())
                            <div class="form-check mx-sm-2">
                                <button disabled class="btn btn-primary btn-sm" title="ارسال رسالة جديدة">
                                    <i class="mdi mdi-plus"></i> اضافة ادارة
                                </button>
                            </div>
                        @else
                            <div class="form-check mx-sm-2">
                                <a href="{{ route('dashboard.club-manges.create') }}" class="btn btn-primary btn-sm"
                                    title="ارسال رسالة جديدة">
                                    <i class="mdi mdi-plus"></i> اضافة ادارة
                                </a>
                            </div>
                        @endif
                    </div>


                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>الترتيب</th>
                                    <th>تاريخ البداية</th>
                                    <th>تاريخ النهاية</th>
                                    <th>الحالة</th>
                                    <th>الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($manges as $index => $mange)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $mange->start }}</td>
                                        <td>{{ $mange->end }}</td>
                                        <td>
                                            @if ($mange->status)
                                                <span class="badge bg-success">سارية حتى الان</span>
                                            @else
                                                <span class="badge bg-danger">منتهية</span>
                                            @endif
                                        </td>
                                        <td><a class="btn btn-info btn-sm" href="{{ route('dashboard.club-manges.show', $mange->id) }}" title="عرض"><i class="mdi mdi-eye"></i></a></td>
                                    </tr>

                                @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-info mt-3 text-center">لا يوجد ادارة لعرضها</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <x-slot name="paginate">
                        {{ $manges->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
