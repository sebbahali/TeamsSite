<x-frontend.layouts.app>
    <x-slot name="title">تعديل لاعب معار خارجيا</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تعديل لاعب معار خارجيا">
                    <livewire:frontend.out-loan-players.edit :outLoanPlayer="$outLoanPlayer" />
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
