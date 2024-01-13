<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-12">
                <x-card.main title="تقرير الحكم الرابع">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.competition-matches.show', ['competition' => $competition, 'match' => $match]) }}"
                                class="btn btn-danger btn-sm" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        </div>
                    </div>

                    <form wire:submit.prevent="save" method="POST" class="forms-sample mt-4 mb-4">
                        @csrf
                        
                        <x-form.group label="التقرير" for="refree_report" :error="$errors->first('refree_report')">
                            <livewire:trix :value="$match->four_refree_report" />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">حفظ
                            التقرير</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</div>