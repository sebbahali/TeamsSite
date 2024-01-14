<x-dashboard.layouts.app>
    <x-slot name="title">البحث عن اللاعبين</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="البحث عن اللاعبين">

                    <form class="form-inline d-flex border-bottom mb-3"
                          action="{{ route('dashboard.players-search.index') }}" method="GET">
                        <div class="form-check my-3">
                            <input type="search" name="search" value="{{ request('search') }}" class="form-control"
                                   placeholder="ابحث بأسم اللاعب او الرقم المدني">
                        </div>
                        <div class="form-group my-3">
                            @php
                            $status = $_GET['status']??'';
                            @endphp
                            <select name="status" id="status" class="form-control status-select2">
                                <option value="" disabled selected>اختر حالة اللاعب</option>
                                <option value="all" {{$status =='all'?'selected':''}}>الكل</option>
                                <option value="Affiliated" {{$status =='Affiliated'?'selected':''}}>منتسب</option>
                                <option value="UnJoin" {{$status =='UnJoin'?'selected':''}}>غير منتسب</option>
                                <option value="Loan" {{$status =='Loan'?'selected':''}}>معار</option>
                                <option value="Stoped" {{$status =='Stoped'?'selected':''}}>موقف</option>
                            </select>
                        </div>
                        <div class="form-check my-3 mx-2">
                            <button class="btn btn-info btn-lg h-100" type="submit">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                    </form>
                    <div class="row mb-5">
                        @forelse ($players as $player)
                            <div class="col-md-4">
                                <x-card.player-search :player="$player" panel="dashboard"/>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">لا يوجد بيانات لعرضها</div>
                            </div>
                        @endforelse
                    </div>

                    <x-slot name="paginate">
                        {{ $players->withQueryString()->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            // $('.status-select2').select2({
            //     placeholder: "اختر حالة اللاعب",
            //     width: 'element'
            // });
        </script>
    @endsection

</x-dashboard.layouts.app>
