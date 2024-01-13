@props(['team'])

<section class="player-card mt-5">
    <div class="card">
        <header>
            <a class="profile">
                <img src="{{$team->logo }}">
            </a>
        </header>

        <article>
            <h1>{{ $team->name }}</h1>
            <div class="info">
                <div>
                    <span>{{ $team->subscribePlayer()->count() }}</span>
                    <span>الاعضاء</span>
                </div>
               <div>
                    <span style=font-size:10px>{{ $team->user_fullname }}</span>
                    <span>امين السر</span>
                </div>
                <div>
                    <span>0</span>
                    <span>بالانتظار</span>
                </div>
            </div>
            <div class="info">
                <a href="{{ route('dashboard.teams.show', $team->slug) }}" class="btn btn-primary mt-3">
                    <i class="mdi mdi-eye"></i> عرض
                </a>
            </div>
        </article>
    </div>
</section>
