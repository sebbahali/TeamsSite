<x-frontend.layouts.app>
    <x-slot name="title">طلبات النقل</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="نقل لاعب" class="mt-3">
                    <form action="{{ route('frontend.transfer-players.index') }}" method="GET">
                        <x-form.group label="ابحث بالرقم المدني" for="search">
                            <div class="input-group">
                                <x-form.input type="text" id="search" name="search" value="{{ request()->get('search') ?? '' }}" placeholder="ابحث باستخدام الرقم المدني" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit">
                                        <i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </x-form.group>
                    </form>
                </x-card.main>
                <div class="mb-4"></div>
                @if ($searchPlayers != null)
                    <x-card.main title="نتائج البحث">
                        <div class="row my-4">
                            @forelse ($searchPlayers as $player)
                                <div class="col-md-4">
                                    <x-card.player :player="$player" panel="frontend">
                                        <x-slot name="link">
                                            <a href="{{ route('frontend.transfer-players.create', $player->card_id) }}" class="btn btn-primary mt-3">تقديم الطلب</a>
                                        </x-slot>
                                    </x-card.player>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-info">لا يوجد لاعبين لعرضهم</div>
                                </div>
                            @endforelse
                        </div>
                    </x-card.main>
                @else
                    <livewire:frontend.transfer-players.index />
                @endif
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
