<x-dashboard.layouts.app>
    <x-slot name="title">كشف اللاعبين</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="كشف اللاعبين - {{ $team->name }}">
                
                    <form class="form-inline d-flex border-bottom mb-3" action="{{ route('dashboard.players.index', $team->slug) }}" method="GET">
                    <div class="form-check my-3 mx-2">
                    <a class="btn btn-success btn-lg h-100" href="{{ route('dashboard.teams.show' , $team->slug ) }}" title="رجوع">
                            <i style=text-align:center class="mdi mdi-arrow-right-bold"></i> رجوع
                      </a>
                        </div>
                     &nbsp; &nbsp; 
                        <div class="form-check my-3">
                            <input type="search" name="search" value="{{ request('search') }}" class="form-control"
                                placeholder="ابحث بأسم اللاعب او الرقم المدني">
                        </div>
                        <div class="form-check my-3 mx-2">
                            <button class="btn btn-info btn-lg h-100" type="submit">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                        <div class="form-check my-3">
                            <a href="{{ route('dashboard.players.pdf', $team->slug) }}" class="btn btn-primary btn-lg h-100" target="_blank">
                                <i class="mdi mdi-file"></i> طباعة
                            </a>
                        </div>
                    </form>
                    <div class="row mb-5">
                        @forelse ($players as $player)
                            <div class="col-md-4">
                                <x-card.player :player="$player" panel="dashboard"/>
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
</x-dashboard.layouts.app>
