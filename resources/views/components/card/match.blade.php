@props(['competition', 'match'])

<div class="match my-4">
    <div class="match-header">
        <div class="row">
            <div class="col">
                <div class="match-tournament text-center">
                    <img src="{{  $competition->logo }}" />
                    {{ $competition->name }}
                </div>
            </div>
            <div class="col">
                <div class="match-actions text-center">
                    <i class="mdi mdi-map"></i> {{ $match->location}}
                </div>
            </div>
            <div class="col">
                <div class="match-status text-center">
                    {{ $match->status->value }}
                </div>
            </div>
        </div>
    </div>
    <div class="match-content">
        <div class="column">
            <div class="team team--home">
                <div class="team-logo">
                    <img src="{{  $match->homeTeam->logo }}" width="100" />
                </div>
                <h2 class="team-name">{{ $match->homeTeam->name }}</h2>
            </div>
        </div>
        <div class="column">
            <div class="match-details">
                <div class="match-date text-center">
                    <span class="d-block">{{ $match->match_time->toFormattedDateString() }}</span>
                    <span class="d-block">{{ $match->match_time->toTimeString() }}</span>
                </div>
                <div class="match-score">
                    <span class="match-score-number @if($match->home_goals > $match->away_goals) match-score-number--leading @endif">
                        {{ $match->home_goals }}
                    </span>
                    <span class="match-score-divider">:</span>
                    <span class="match-score-number @if($match->home_goals < $match->away_goals) match-score-number--leading @endif">
                        {{ $match->away_goals }}
                    </span>
                </div>
                @if($match->first_refree)
                    <div class="match-referee">
                        الحكم: <strong>{{ $match->first_refree }}</strong>
                    </div>
                @endif
            </div>
        </div>
        <div class="column">
            <div class="team team--away">
                <div class="team-logo">
                    <img src="{{  $match->awayTeam->logo }}" />
                </div>
                <h2 class="team-name">{{ $match->awayTeam->name }}</h2>
            </div>
        </div>
    </div>
</div>
