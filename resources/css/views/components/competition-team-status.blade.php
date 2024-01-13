@props(['status'])

@if ($status == \App\Enums\CompetitionTeamStatus::Draft)
    <span class="badge bg-danger">مضاف من النادي</span>
@elseif($status == \App\Enums\CompetitionTeamStatus::Unsubscripe)
    <span class="badge bg-danger">لم يتم الاشتراك</span>
@elseif($status == \App\Enums\CompetitionTeamStatus::Subscripe)
    <span class="badge bg-warning">تم الاشتراك</span>
@elseif($status == \App\Enums\CompetitionTeamStatus::Register)
    <span class="badge bg-info">تم التسجيل</span>
@elseif($status == \App\Enums\CompetitionTeamStatus::Paid)
    <span class="badge bg-success">تم الدفع</span>
@endif

