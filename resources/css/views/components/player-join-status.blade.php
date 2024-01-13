@props(['status'])

@switch($status)
    @case(\App\Enums\PlayerJoinStatus::UnJoin)
        <span class="badge bg-secondary">{{ \App\Enums\PlayerJoinStatus::UnJoin->value }}</span>
        @break
    @case(\App\Enums\PlayerJoinStatus::Affiliated)
        <span class="badge bg-success">{{ \App\Enums\PlayerJoinStatus::Affiliated->value }}</span>
        @break
    @case(\App\Enums\PlayerJoinStatus::Loan)
        <span class="badge bg-info">{{ \App\Enums\PlayerJoinStatus::Loan->value }}</span>
        @break
    @case(\App\Enums\PlayerJoinStatus::Stoped)
        <span class="badge bg-danger">{{ \App\Enums\PlayerJoinStatus::Stoped->value }}</span>
        @break
    @default
@endswitch
