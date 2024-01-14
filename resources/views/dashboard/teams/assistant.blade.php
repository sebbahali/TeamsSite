<x-dashboard.layouts.app>
    <x-slot name="title">الجهاز الفني</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="الجهاز الفني">
                <a class="btn btn-success  btn-sm mb-2" href="{{ route('dashboard.teams.show' , $team->slug) }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                        <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">   
                                    <img src="{{ $assistant->sport_image }}" alt="profile" class="img-lg rounded-circle mb-3">
                                    <h4>{{ $assistant->name }}</h4>
                                    <p><i class="mdi mdi-account-network"></i> {{  $assistant->role->value }}</p>
                                    </div>
                                </div>
                             
                                 <div class="col-lg-8">
                                  <div class="pb-2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>الرقم المدني</td>
                                            <td>{{ $assistant->card_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ الميلاد</td>
                                            <td>{{ $assistant->birthdate }}</td>
                                        </tr>
                                        <tr>
                                            <td>الفريق</td>
                                            <td>{{ $assistant->team->name }}</td>
                                        </tr>
                                    </table>
                              </div> 
                            </div> 
                     <div class="mt-5"></div>
                            <div class="col-md-4 mb-5" style="margin-inline-start:8rem; margin-inline-end:5rem;">
                                    <x-card.image-view :src="$assistant->sport_image" title="الصورة الرياضية"/>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                    <x-card.image-view :src=" $assistant->front_image" title="صورة البطاقة الشخصية"/>
                            </div>                
                </x-card.main>
            </div>
        </div>
      </div>
     </div>
     </div>
</x-dashboard.layouts.app>
