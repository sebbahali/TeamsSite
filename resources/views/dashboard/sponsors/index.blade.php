<x-dashboard.layouts.app>
    <x-slot name="title">رعاة النادي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="رعاة النادي">

                    <div class="form-inline d-flex align-items-center">
                        <form class="row g-1" action="" method="GET">
                            <div class="col-8" dir="rtl">
                                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                                       placeholder="ابحث بعنوان الخبر">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" type="submit">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                            </div>
                        </form>

                        @ableTo('create-sponsors')
                        <div class="form-check mx-sm-2">
                            <a href="{{ route('dashboard.sponsors.create') }}" class="btn btn-primary h-100"
                               title="اضافة  راعي جديد">
                                <i class="mdi mdi-plus"></i> اضافة راعي
                            </a>
                        </div>

                        @endableTo
                    </div>


                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الصورة</th>
                                <th>الاجراء</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($sponsors as $index => $sponsor)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $sponsor->name }}</td>
                                    <td><img src="{{ $sponsor->image}}" alt=""></td>
                                    <td>
                                        @ableTo('update-sponsors')
                                        <a class="btn btn-sm btn-info"
                                           href="{{ route('dashboard.sponsors.edit', $sponsor) }}">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </a>
                                        @endableTo

                                        @ableTo('delete-sponsors')
                                        <form action="{{ route('dashboard.sponsors.destroy', $sponsor) }}"
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
                        {{ $sponsors->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
