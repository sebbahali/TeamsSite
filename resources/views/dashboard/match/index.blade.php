<x-dashboard.layouts.app>
    <x-slot name="title">مباريات النادي</x-slot>
    <x-slot name="active_url">matches</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="مباريات النادي">

                    <div class="form-inline d-flex align-items-center">
                        <form class="row g-1" action="" method="GET">
                            <div class="col-8" dir="rtl">
                                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                                       placeholder="ابحث باسم المسابقة">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" type="submit">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                            </div>
                        </form>

                        @ableTo('create-matches')
                        <div class="form-check mx-sm-2">
                            <a href="{{ route('dashboard.matches.create') }}" class="btn btn-primary h-100"
                               title="اضافة  مباراة جديدة">
                                <i class="mdi mdi-plus"></i> اضافة مباراة
                            </a>
                        </div>

                        @endableTo
                    </div>


                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المسابقة</th>
                                <th>مكان المباراة</th>
                                <th>الفريق الخصم</th>
                                <th>الاجراء</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($matches as $index => $match)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $match->competition_name }}</td>
                                    <td>{{ $match->match_place }}</td>
                                    <td>{{ $match->opponent_team }}</td>

                                    <td>

                                        {{--@ableTo('read-matches')--}}
                                        {{--<a class="btn btn-sm btn-success"--}}
                                           {{--href="{{ route('dashboard.posts.show', $match->id) }}">--}}
                                            {{--<i class="mdi mdi-eye"></i>--}}
                                        {{--</a>--}}
                                        {{--@endableTo--}}

                                        @ableTo('update-matches')
                                        <a class="btn btn-sm btn-info"
                                           href="{{ route('dashboard.matches.edit', $match->id) }}">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </a>
                                        @endableTo

                                        @ableTo('delete-matches')
                                        <form action="{{ route('dashboard.matches.destroy', $match->id) }}"
                                              method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm delete-confirmation">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                        @endableTo
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-info mt-3 text-center">لا يوجد بيانات لعرضها</div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    <x-slot name="paginate">
                        {{ $matches->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
