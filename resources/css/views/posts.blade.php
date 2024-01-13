@extends('layouts.app',['page'=>'posts'])

@section('content')
    <div class="news-page">
        <div class="container my-5">
            <h2 class="section-header">اخبار النادي</h2>
            <p>انت معنا خطوة بخطوة</p>

            <div class="row">
                @forelse ($news as $new)
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="{{ $new->image}}" style="height: 250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title mt-3">
                                    <a href="{{ route('web.posts.show', $new->slug) }}">{{ $new->title }}</a>
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

            <div class="row mt-5">{{ $news->links() }}</div>
        </div>
    </div>
@endsection
