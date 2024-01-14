<x-dashboard.layouts.app>
    <x-slot name="title">التقييم</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="التقييم">

                    <div class="form-inline d-flex align-items-center">
                        <form class="row g-1" action="" method="GET">
                            <div class="col-8" dir="rtl">
                                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="ابحث بعنوان الخبر">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" type="submit">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                     <br>
                     <hr>
                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>الترتيب</th>
                                    <th>الموضوع</th>
                                    <th>اسم المرسل</th>
                                    <th>الحالة</th>
                                    <th>الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($feedbacks as $index => $feedback)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $feedback->subject }}</td>
                                        <td>{{ $feedback->name }}</td>
                                        <td>
                                            @if($feedback->status)
                                                <span class="badge bg-success">مقروء</span>
                                            @else
                                                <span class="badge bg-danger">غير مقروء</span>
                                            @endif
                                        </td>
                                        <td>
                                            @ableTo('read-feedbacks')
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('dashboard.feedbacks.show', $feedback) }}">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            @else
                                                <button disabled class="btn btn-sm btn-success">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            @endableTo

                                            @ableTo('delete-feedbacks')
                                                <form action="{{ route('dashboard.feedbacks.destroy', $feedback) }}" method="POST" style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger btn-sm delete-confirmation">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <button disabled class="btn btn-danger btn-sm">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
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
                        {{ $feedbacks->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
