<x-dashboard.layouts.app>
    <x-slot name="title">تفاصيل المباراة</x-slot>
    <x-slot name="active_url">matches</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تفاصيل المباراة">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.matches.edit', $match) }}" class="btn btn-info btn-sm" title="تعديل">
                                <i class="mdi mdi-pen"></i>
                            </a>
                        </div>
                        <div class="form-check mx-sm-2 align-self-end">
                            {{--@ableTo('delete-matches')--}}
                                <form action="{{ route('dashboard.matches.destroy', $match) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm delete-confirmation">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            {{--@endableTo--}}
                        </div>

                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
