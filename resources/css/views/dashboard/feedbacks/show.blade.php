<x-dashboard.layouts.app>
    <x-slot name="title">التقييم</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="التقييم">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
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
                        </div>
                    </div>
                    <div class="my-4">
                        <h1>{{ $feedback->subject }}</h1>
                        <div class="mt-3">
                            <i class="mdi mdi-account"></i> {{ $feedback->name }}
                            <br />
                            <i class="mdi mdi-email"></i> {{ $feedback->email }}
                        </div>
                        <div class="mt-3">{{ $feedback->body }}</div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
