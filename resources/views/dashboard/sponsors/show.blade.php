<x-dashboard.layouts.app>
    <x-slot name="title">تفاصيل الخبر</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تفاصيل الخبر">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.posts.edit', $post) }}" class="btn btn-info btn-sm" title="تعديل">
                                <i class="mdi mdi-pen"></i>
                            </a>
                        </div>
                        <div class="form-check mx-sm-2 align-self-end">
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
                        </div>

                        <div class="form-check mx-sm-2 align-self-end">
                            @ableTo('update-posts')
                                @if ($post->status)
                                    <a class="btn btn-sm btn-danger" href="{{ route('dashboard.posts.change-status', ['post' => $post, 'status' => 0]) }}" title="الغاء التنشيط">
                                        <i class="mdi mdi-close"></i>
                                    </a>
                                @else
                                    <a class="btn btn-sm btn-success" href="{{ route('dashboard.posts.change-status', ['post' => $post, 'status' => 1]) }}" title="تنشيط">
                                        <i class="mdi mdi-check"></i>
                                    </a>
                                @endif
                            @else
                                @if ($post->status)
                                    <button disabled class="btn btn-sm btn-danger" title="الغاء التنشيط">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                @else
                                    <button disabled class="btn btn-sm btn-success" title="تنشيط">
                                        <i class="mdi mdi-check"></i>
                                    </button>
                                @endif
                            @endableTo
                        </div>
                    </div>
                    <div class="my-4">
                        <img src="{{  $post->image }}" style="width: 400px;"/>

                        <h2 class="mt-3">{{ $post->title }}</h2>
                        @if($post->status)
                            <span class="badge bg-success">منشور</span>
                        @else
                            <span class="badge bg-danger">غير منشور</span>
                        @endif
                        <div class="mt-3">{!! $post->body !!}</div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
