@props(['player', 'panel', 'link' => null])


<section class="player-card mt-5">
    <div class="card">
        <header>
            <a class="profile">
                <img src="{{ $player->player_img }}" alt="Profile Image">
            </a>
        </header>

        <article>
            <h1 style=font-size:14px; font-family:Gulzar;" >{{ $player->name }}</h1>
            <div class="text-center">
                <x-player-join-status :status="$player->join_status" />
            </div>
            <div class="info">
                <div>
                    <span><i class="mdi mdi-account-card-details"></i></span>
                    <span>{{ $player->card_id }}</span>
                </div>
                <div>
                    <span><i class=" mdi mdi-calendar"></i></span>
                    <span>{{ $player->birth_date }}</span>
                </div>
                <div>
                    <span><i class="mdi mdi-flag"></i></span>
                    <span>{{ $player->team->name }}</span>
                </div>
            </div>
            <div class="info">
                @if (is_null($link))
                    <a href="{{ ($panel == 'dashboard') ? route('dashboard.players-search.show', $player->card_id) : route('frontend.players-search.show', $player->card_id); }}" class="btn btn-primary btn-sm mt-3">عرض</a>
                @else
                    {!! $link !!}
                @endif
            </div>
        </article>
    </div>
</section>
