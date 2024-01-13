<x-frontend.layouts.app>
    <x-slot name="title">اضافة ادارة</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="اضافة ادارة">
                    <form class="my-4" action="{{ route('frontend.team-manges.store') }}" method="POST">
                        @csrf

                        <x-form.group label="تاريخ البداية" for="start_date" :error="$errors->first('start_date')">
                            <x-form.input type="date" id="start_date" name="start_date" placeholder="تاريخ البداية" />
                        </x-form.group>
                        <x-form.group label="تاريخ النهاية" for="end_date" :error="$errors->first('end_date')">
                            <x-form.input type="date" id="end_date" name="end_date" placeholder="تاريخ النهاية" />
                        </x-form.group>

                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> حفظ الادارة</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
