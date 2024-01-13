@props(['badge'])

@if($badge == \App\Enums\PlayerJoinStatus::UnJoin)
    <div class="ribbon ribbon-one ribbon-color ">
        <span>{{  \App\Enums\PlayerJoinStatus::UnJoin->value }}</span>
    </div>
@endif

@if($badge == \App\Enums\PlayerJoinStatus::Affiliated)
    <div class="ribbon ribbon-four ribbon-color">
        <span>{{  \App\Enums\PlayerJoinStatus::Affiliated->value }}</span>
    </div>
@endif

@if($badge ==  \App\Enums\PlayerJoinStatus::Loan)
    <div class="ribbon ribbon-there ribbon-color">
        <span>{{ \App\Enums\PlayerJoinStatus::Loan->value }}</span>
    </div>
@endif

@if($badge == \App\Enums\PlayerJoinStatus::Stoped)
    <div class="ribbon ribbon-four ribbon-color">
        <span>{{  \App\Enums\PlayerJoinStatus::Stoped->value }}</span>
    </div>
@endif
