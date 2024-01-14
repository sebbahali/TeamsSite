<x-dashboard.layouts.app>
    <x-slot name="title">فتح التجديد السنوي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="فتح التجديد السنوي">
                    @if (!$yearUpdate)
                        <form class="my-3" action="{{ route('dashboard.year-updates.store') }}" method="POST">
                            @csrf

                            <x-form.group label="الفرق الاهلية" for="teams" :error="$errors->first('teams')">
                                <div class="row">

                                @forelse ($teams as $team)
                                    <div class="col-md-4">
                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="teams-{{ $team->id }}">
                                                <input class="form-check-input" name="teams[]" value="{{ $team->id }}" type="checkbox" id="teams-{{ $team->id }}" /> {{ $team->name }}
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-info">لا يوجد فرق اهلية</div>
                                @endforelse

                                </div>
                            </x-form.group>

                            <x-form.group label="تاريخ البداية" for="start" :error="$errors->first('start')">
                                <x-form.input type="date" id="start" name="start" placeholder="تاريخ البداية" />
                            </x-form.group>
                            <x-form.group label="تاريخ النهاية" for="end" :error="$errors->first('end')">
                                <x-form.input type="date" id="end" name="end" placeholder="تاريخ النهاية" />
                            </x-form.group>


                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-calendar-clock"></i> فتح التجديد السنوي</button>
                        </form>
                    @else
                        <div>
                            <div class="alert alert-info mt-3">التجديد مفتوح الان</div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>تاريخ البداية</td>
                                    <td>{{ $yearUpdate->start }}</td>
                                </tr>
                                <tr>
                                    <td>تاريخ النهاية</td>
                                    <td>{{ $yearUpdate->end }}</td>
                                </tr>
                            </table>
                            <div class="my-4">
                                <a href="{{ route('dashboard.year-updates.show') }}" class="btn btn-primary">
                                    <i class="mdi mdi-eye"></i> عرض الفرق
                                </a>
                                <a href="{{ route('dashboard.year-updates.edit', $yearUpdate->id) }}" class="btn btn-info">
                                    <i class="mdi mdi-pen"></i> تعديل التجديد
                                </a>
                            </div>
                        </div>
                    @endif

                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
