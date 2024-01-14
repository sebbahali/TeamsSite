@extends('layouts.app',['page'=>'club_management'])

@section('content')
    <div class="container">
        <div class="row">
            @if ($management)
                @forelse ($management->clubMangeMembers as $member)
                    <div class="col-12">
                        <div class="card">
                            <figure><img src="{{$member->avatar }}"/>
                                <figcaption>
                                    <h3>{{ $member->name }}</h3>
                                    <p>{{ $member->role->value }}</p>
                                </figcaption>
                                <a href="#"></a>
                            </figure>
                        </div>
                    </div>
                @empty
                    <div class="col text-center">
                        <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                    </div>
                @endforelse
            @else
                <div class="col text-center">
                    <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                </div>
            @endif
        </div>
    </div>
@endsection
