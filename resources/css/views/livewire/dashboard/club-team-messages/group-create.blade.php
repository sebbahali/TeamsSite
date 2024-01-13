<div class="container">
    <div class="row">
        <div class="col-12">
                <x-card.main title="ارسال رسالة الى الفرق">
                         
                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf

                        <x-form.group label="* حدد الفرق" for="team" :error="$errors->first('teamGroup')">
                        <hr>
                            <div class="row">

                               @foreach ($teams as $team)
                                    <div class="col-md-3">
                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="team-{{ $team->id }}">
                                                <input class="form-check-input" wire:model.defer="teamGroup" value="{{ $team->id }}" type="checkbox" id="team-{{ $team->id }}" /> {{ $team->name }}
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                               @endforeach

                            </div>
                            <hr>
                        </x-form.group>

                        <x-form.group label="المرسل اليه" for="target" :error="$errors->first('target')">
                            <x-form.select wire:model.defer="target" id="target" name="target" placeholder="الرجاء اختيار الشخص المستلم">
                                <option selected value="{{ \App\Enums\ClubTeamMessageTarget::TeamSecretary->value }}">{{ \App\Enums\ClubTeamMessageTarget::TeamSecretary->value }}</option>
                                <option value="{{ \App\Enums\ClubTeamMessageTarget::TeamLeader->value }}">{{ \App\Enums\ClubTeamMessageTarget::TeamLeader->value }}</option>
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="العنوان" for="subject" :error="$errors->first('subject')">
                     
                            <x-form.input type="text" wire:model.defer="subject" id="subject" name="subject" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group-upload name="file" label="ملف مرفق" :error="$errors->first('file')" placeholder="الرجاء اختيار الملف" />
                       <hr>
                       <br>
                        <x-form.group label="الرسالة" for="body" :error="$errors->first('body')" style=min-height:10em>
                            <livewire:trix />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال الرسالة</button>
                    </form>
                    
                </x-card.main>
              
        </div>
    </div>
</div>
