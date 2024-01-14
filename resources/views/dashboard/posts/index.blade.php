<x-dashboard.layouts.app>
    <x-slot name="title">اخبار النادي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="اخبار النادي">

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

                        @ableTo('create-posts')
                            <div class="form-check mx-sm-2">
                                <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary h-100"
                                    title="اضافة  خبر جديد">
                                    <i class="mdi mdi-plus"></i> اضافة  خبر
                                </a>
                            </div>
                        @else
                            <div class="form-check mx-sm-2">
                                <button disabled class="btn btn-primary h-100" title="اضافة  خبر جديد">
                                    <i class="mdi mdi-plus"></i> اضافة  خبر
                                </button>
                            </div>
                        @endif
                    </div>


                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>الترتيب</th>
                                    <th>العنوان</th>
                                    <th>الحالة</th>
                                    <th>الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $index => $post)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            @if($post->status)
                                                <span class="badge bg-success">منشور</span>
                                            @else
                                                <span class="badge bg-danger">غير منشور</span>
                                            @endif
                                        </td>
                                        <td>
                                            @ableTo('update-posts')
                                                @if ($post->status)
                                                    <a class="btn btn-sm btn-danger" href="{{ route('dashboard.posts.change-status', ['post' => $post, 'status' => 0]) }}">
                                                        <i class="mdi mdi-close"></i>
                                                    </a>
                                                @else
                                                    <a class="btn btn-sm btn-success" href="{{ route('dashboard.posts.change-status', ['post' => $post, 'status' => 1]) }}">
                                                        <i class="mdi mdi-check"></i>
                                                    </a>
                                                @endif
                                            @else
                                                @if ($post->status)
                                                    <button disabled class="btn btn-sm btn-danger">
                                                        <i class="mdi mdi-close"></i>
                                                    </button>
                                                @else
                                                    <button disabled class="btn btn-sm btn-success">
                                                        <i class="mdi mdi-check"></i>
                                                    </button>
                                                @endif
                                            @endableTo

                                            @ableTo('read-posts')
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('dashboard.posts.show', $post) }}">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            @else
                                                <button disabled class="btn btn-sm btn-success">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            @endableTo

                                            @ableTo('update-posts')
                                                <a class="btn btn-sm btn-info"
                                                    href="{{ route('dashboard.posts.edit', $post) }}">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                            @else
                                                <button disabled class="btn btn-sm btn-info">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </button>
                                            @endableTo

                                            @ableTo('delete-posts')
                                                <form action="{{ route('dashboard.posts.destroy', $post) }}" method="post" style="display: inline-block">
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
                        {{ $posts->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
