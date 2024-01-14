<x-dashboard.layouts.app>
    <x-slot name="title">التجديد السنوي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>  
                    <x-card.main title="التجديد السنوي - فريق {{ $team->name }}">
                    <a class="btn btn-success btn-sm" href="{{ route('dashboard.year-updates.show') }}" title="رجوع">
                            <i  class="mdi mdi-arrow-right-bold"></i> صفحة عرض التجديد
                        </a> 
                        <hr>
                        <div class="preview-list mt-3">
                            <div class="row">
                                @forelse ($players as $player)
                                    <div class="col-md-4">
                                        <x-card.player :player="$player" panel="dashboard" />
                                    </div>
                                @empty
                                    <div class="alert alert-info">لا يوجد بيانات لعرضها</div>
                                @endforelse
                            </div>
                            <x-slot name="paginate">
                        {{ $players->withQueryString()->links() }}
                    </x-slot>
                        </div>
                    </x-card.main>
                </div>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
