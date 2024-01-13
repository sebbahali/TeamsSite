<x-dashboard.layouts.app>
    <x-slot name="title">تعديل بيانات اللاعب في المبارة</x-slot>

    <div class="container">
        <x-card.main title="تفاصيل اللاعب في المباراة">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addGoals">
                اضافة هدف
            </button>
            <table class="table table-bordered mt-4">
                <thead>
                    <th colspan="2" class="text-center">الاهداف</th>
                </thead>
                <tbody>
                    <tr>
                        <td>التوقيت</td>
                        <td>الاجراء</td>
                    </tr>
                    @foreach ($player->g as $index => $goals)
                        <tr>
                            <td>{{ $goals }}</td>
                            <td>
                                <form action="{{ route('dashboard.match-players.delete-goal', ['match' => $match, 'player' => $player, 'index' => $index]) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm delete-confirmation ml-2" title="حذف">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form class="mt-4" action="{{ route('dashboard.match-players.update', ['match' => $match, 'player' => $player]) }}" method="POST">
                @csrf
                @method('PATCH')

                <x-card.main title="البطاقة الحمراء" class="border pt-3 mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <x-form.group label="التوقيت" for="r" :error="$errors->first('r')">
                                <x-form.input type="text" id="r" name="r" value="{{ old('r') ?? $player->r['time'] }}" placeholder="البطاقة الحمراء" />
                            </x-form.group>
                        </div>
                        <div class="col-md-9">
                            <x-form.group label="السبب" for="rresone" :error="$errors->first('rresone')">
                                <x-form.input type="text" id="rresone" name="rresone" value="{{ old('rresone') ?? $player->r['resone'] }}" placeholder="البطاقة الحمراء" />
                            </x-form.group>
                        </div>
                    </div>
                </x-card.main>

                <x-card.main title="البطاقة الصفراء" class="border pt-3 mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <x-form.group label="التوقيت" for="y" :error="$errors->first('y')">
                                <x-form.input type="text" id="y" name="y" value="{{ old('y') ?? $player->y['time'] }}" placeholder="البطاقة الصفراء" />
                            </x-form.group>
                        </div>
                        <div class="col-md-9">
                            <x-form.group label="السبب" for="yresone" :error="$errors->first('yresone')">
                                <x-form.input type="text" id="yresone" name="yresone" value="{{ old('yresone') ?? $player->y['resone'] }}" placeholder="البطاقة الصفراء" />
                            </x-form.group>
                        </div>
                    </div>
                </x-card.main>

                <x-card.main title="التبديل" class="border pt-3 mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <x-form.group label="التوقيت" for="s" :error="$errors->first('s')">
                                <x-form.input type="text" id="s" name="s" value="{{ old('s') ?? $player->s['time'] }}" placeholder="التبديل" />
                            </x-form.group>
                        </div>
                        <div class="col-md-9">
                            <x-form.group label="اللاعب البديل" for="player" :error="$errors->first('player')">
                                <x-form.select wire:model.defer="player" id="player" name="player">
                                    <option value="">اختر اللاعب</option>
                                    @foreach ($teamPlayers as $tplayer)
                                        <option @selected($player->s['player'] == $tplayer->player_id) value="{{ $tplayer->player_id }}">{{ $tplayer->player->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </x-form.group>
                        </div>
                    </div>
                </x-card.main>

                <button class="btn btn-primary mb-4">حفظ</button>
            </form>
        </x-card.main>

        <!-- Modal -->
        <div class="modal fade" id="addGoals" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addGoals" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGoals">اضافة هدف</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('dashboard.match-players.add-goal', ['match' => $match, 'player' => $player]) }}" method="POST">
                            @csrf
                            <x-form.group label="توقيت الهدف" for="goal" :error="$errors->first('goal')">
                                <x-form.input type="text" id="goal" name="goal" value="{{ old('goal') ?? '' }}" required placeholder="توقيت الهدف" />
                            </x-form.group>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-dashboard.layouts.app>