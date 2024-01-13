<x-dashboard.layouts.app>
    <x-slot name="title">تعديل المباراة</x-slot>
    <x-slot name="active_url">matches</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تعديل المباراة">
                    <form class="my-3" action="{{ route('dashboard.matches.update', $match) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')



                        <x-form.group label="اسم المسابقة" for="competition_name" :error="$errors->first('competition_name')">
                            <x-form.input type="text" id="competition_name" name="competition_name" value="{{ $match->competition_name }}" placeholder="اسم المسابقة" />
                        </x-form.group>

                        <x-form.group label="مكان المباراة" for="match_place" :error="$errors->first('match_place')">
                            <x-form.input type="text" id="match_place" name="match_place" value="{{ $match->match_place }}" placeholder="مكان المباراة" />
                        </x-form.group>

                        <x-form.input type="hidden" id="main_team" name="main_team" value="نادي قريات" placeholder="الفريق الاساسي" />

                        <x-form.group label="الفريق الخصم" for="opponent_team" :error="$errors->first('opponent_team')">
                            <x-form.input type="text" id="opponent_team" name="opponent_team" value="{{ $match->opponent_team }}" placeholder="الفريق الخصم" />
                        </x-form.group>

                        <x-form.group label="شعار الفريق الخصم" for="opponent_team_logo" :error="$errors->first('opponent_team_logo')">
                            <x-form.input type="file" id="opponent_team_logo" name="opponent_team_logo" placeholder="شعار الفريق الخصم" />
                        </x-form.group>

                        <x-form.group label="التوقيت" for="match_time" :error="$errors->first('match_time')">
                            <x-form.input type="time" id="match_time" name="match_time" value="{{$match->match_time }}" placeholder="التوقيت" />
                        </x-form.group>

                        <x-form.group label="التاريخ" for="match_date" :error="$errors->first('match_date')">
                            <x-form.input type="date" id="match_date" name="match_date" value="{{ $match->match_date }}" placeholder="التاريخ" />
                        </x-form.group>


                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> تعديل المباراة</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
