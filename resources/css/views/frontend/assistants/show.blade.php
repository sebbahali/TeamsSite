<x-frontend.layouts.app>
    <x-slot name="title">الجهاز الفني</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="الجهاز الفني">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.assistants.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                    </div>

                    <div class="card-body">        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">
                                    <x-card.image-view :src="$assistant->sport_image" title="الصورة الرياضية"/>
                                    <div class="mt-3"></div>
                                    <x-card.image-view :src="$assistant->front_image" title="اثبات شخصية"/>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $assistant->name }}</h3>
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 mr-2 text-muted"><i class="mdi mdi-account-network"></i>
                                                {{ $assistant->role->value }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 py-2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>الرقم المدني</td>
                                            <td>{{ $assistant->card_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ الميلاد</td>
                                            <td>{{ $assistant->birthdate }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
