<x-frontend.layouts.app>
    <x-slot name="title">كشف اللاعبين</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="كشف اللاعبين">
                
                    <form class="form-inline d-flex border-bottom mb-3" action="{{ route('frontend.players.index') }}" method="GET">

                        <div class="form-check my-3">
                            <input type="search" name="search" value="{{ request('search') }}" class="form-control"
                                placeholder="ابحث بأسم اللاعب او الرقم المدني">
                        </div>
                        <div class="form-check my-3 mx-2">
                            <button class="btn btn-info btn-md h-100" type="submit">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                        <div class="form-check my-3">
                            <a href="{{ route('frontend.players.pdf') }}" class="btn btn-primary btn-md h-100" target="_blank">
                                <i class="mdi mdi-file"></i> طباعة
                            </a>
                        </div>
                    </form>
                    <div class="row my-4">
                        @forelse ($players as $player)
                            <div class="col-md-4 mb-4">
                                <x-card.player :player="$player" panel="frontend" />
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info">لا يوجد لاعبين لعرضهم</div>
                            </div>
                        @endforelse
                    </div>

                    {{ $players->withQueryString()->links() }}
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
