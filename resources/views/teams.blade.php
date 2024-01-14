@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-12">  
            <div class="card">
            <div class="card-header bg-primary" style="background-color:orange">
              <div class="container my-5">  
            <h2 class="section-header">الفرق الأهلية</h2>
            <p>معا نحو مستقبل واعد</p>
             <div class="card-body py-2">
            </div>

            <div class="row">
                @forelse ($teams as $team)
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="{{  $team->logo}}" style="height: 250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-2">
                                    <a href="{{ route('web.teams.show', $team->slug) }}">{{ $team->name }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col text-center">
                        <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                    </div>
                @endforelse
            </div>

            <div class="row mt-5">{{ $teams->links() }}</div>
        </div>
    </div>
   </div>
          </div>
        </div>
       </div>
@endsection
