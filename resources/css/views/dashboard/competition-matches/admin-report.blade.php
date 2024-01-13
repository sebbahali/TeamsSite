<x-dashboard.layouts.app>
    <x-slot name="title">تقرير مراقب المباراة</x-slot>

    <livewire:dashboard.competition-matches.admin-report :competition="$competition" :match="$match" />
</x-dashboard.layouts.app>