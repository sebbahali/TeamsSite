<x-dashboard.layouts.app>
    <x-slot name="title">التجديد السنوي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="التجديد السنوي">
                    <livewire:dashboard.year-updates.edit :year="$yearUpdate" />
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
