<x-dashboard.layouts.app>
    <x-slot name="title">الفرق الاهلية</x-slot>

    <div class="container">
        <div class="row">
             <div class="col-12">  
             <x-card.main title=" الفرق الاهلية" >
              
             <a class="btn btn-success btn-sm" href="{{ route('dashboard.index') }}" title="رجوع">
                            <i  class="mdi mdi-arrow-right-bold"></i> 
                        </a> 
                        <a class="btn btn-success btn-sm" href="{{ route('dashboard.teams.create') }}" title="تسجيل فريق">
                            <i  class="mdi mdi-plus-circle-outline"></i>
                        </a>  
                              <div class="row mt-4 mb-4">
                                <form class="row g-1" action="" method="GET">                                                                   
                                      <div class="col-8 mb-3" dir="rtl">
                                        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="ابحث بأسم الفريق الأهلي">
                                   </div>
                                    <div class="col-4">
                                        <button class="btn btn-info btn-md" type="submit">
                                            <i class="mdi mdi-magnify"></i> بحث
                                        </button>
                                    </div>    
                                </form> 
                             
       
            <hr>
             
                   
                
            @forelse ($teams as $team)
                <div class="col-md-4">
                    <x-dashboard.team-card :team="$team" />
                </div>
            @empty
            </div>
                <div class="col-12">
                    <div class="alert alert-info text-center">لا يوجد فرق أهلية لعرضها</div>
                </div>
                </div>
            @endforelse           
        </div>
          
        <div class="mt-4">
            {{ $teams->withQueryString()->links() }}
            </div>
              </x-card.main>
          </div>
        </div>
       </div>
 
</x-dashboard.layouts.app>
