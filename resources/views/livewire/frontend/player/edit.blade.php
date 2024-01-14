<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">طلب تسجيل لاعب</h4>

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf

                        <div class="form-group">
                            <label for="card_id">الرقم المدني</label>
                            <input type="text" wire:model="card_id" value="{{ old('card_id') }}" class="form-control"
                                id="card_id" placeholder="اكتب الرقم المدني">

                            @error('card_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" wire:model="name" class="form-control" id="name"
                                placeholder="اكتب اسم اللاعب">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birth_date">تاريخ الميلاد</label>
                            <input type="date" wire:model="birth_date" class="form-control" id="birth_date"
                                placeholder="اختر تاريخ الميلاد">

                            @error('birth_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="location">مكان الاقامة</label>
                            <input type="text" wire:model="location" class="form-control" id="location"
                                placeholder="اكتب مكان الاقامة">

                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" wire:model="phone" class="form-control" id="phone"
                                placeholder="اكتب رقم الهاتف">

                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div
                            class="form-group"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <label for="player_img">صورة اللاعب</label>
                            <input type="file" wire:model="player_img" class="form-control" id="player_img" placeholder="اختر صورة اللاعب">

                            <div x-show="isUploading" class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    :style="'width: ' + progress + '%'"></div>
                            </div>

                            @error('player_img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div
                            class="form-group"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <label for="card_identy_front">صورة البطاقة الشخصية الوجه الامامي</label>
                            <input type="file" wire:model="card_identy_front" class="form-control" id="card_identy_front" placeholder="اختر صورة الوجه الامامية للبطاقة">

                            <div x-show="isUploading" class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    :style="'width: ' + progress + '%'"></div>
                            </div>

                            @error('card_identy_front')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div
                            class="form-group"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <label for="card_identy_back">صورة البطاقة الشخصية الوجه الخلفي</label>
                            <input type="file" wire:model="card_identy_back" class="form-control" id="card_identy_back" placeholder="اختر صورة الوجه الخلفي للبطاقة">

                            <div x-show="isUploading" class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    :style="'width: ' + progress + '%'"></div>
                            </div>

                            @error('card_identy_back')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($birth_date != null && calcAge($birth_date) < 16)
                            <div
                                class="form-group"
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <label for="birth_doc">صورة شهادة الميلاد</label>
                                <input type="file" wire:model="birth_doc" class="form-control" id="birth_doc" placeholder="اختر صورة شهادة الميلاد">

                                <div x-show="isUploading" class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        :style="'width: ' + progress + '%'"></div>
                                </div>

                                @error('birth_doc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div
                                class="form-group"
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <label for="father_check_doc">صورة موافقة ولي الامر</label>
                                <input type="file" wire:model="father_check_doc" class="form-control" id="father_check_doc" placeholder="اختر صورة موافقة ولي الامر">

                                <div x-show="isUploading" class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        :style="'width: ' + progress + '%'"></div>
                                </div>

                                @error('father_check_doc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div
                                class="form-group"
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <label for="father_identy_card">صورة البطاقة الشخصية لولي الامر</label>
                                <input type="file" wire:model="father_identy_card" class="form-control" id="father_identy_card" placeholder="اختر صورة البطاقة الشخصية لولي الامر">

                                <div x-show="isUploading" class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        :style="'width: ' + progress + '%'"></div>
                                </div>

                                @error('father_identy_card')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">حفظ
                            البيانات</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">معاينة بيانات اللاعب</h4>
                    <table class="table table-bordered mb-5">
                        <tr>
                            <td>الرقم القومي</td>
                            <td>{{ $card_id ?? 'لم يتم الادخال' }}</td>
                        </tr>
                        <tr>
                            <td>الاسم</td>
                            <td>{{ $name ?? 'لم يتم الادخال' }}</td>
                        </tr>
                        <tr>
                            <td>تاريخ الميلاد</td>
                            <td>{{ $birth_date ?? 'لم يتم الادخال' }}</td>
                        </tr>
                        <tr>
                            <td>مكان الاقامة</td>
                            <td>{{ $location ?? 'لم يتم الادخال' }}</td>
                        </tr>
                        <tr>
                            <td>رقم الهاتف</td>
                            <td>{{ $phone ?? 'لم يتم الادخال' }}</td>
                        </tr>
                    </table>

                    @if ($player_img || $this->player->player_img)
                        <div class="card">
                            <div class="card-header">
                                صورة اللاعب
                            </div>
                            <div class="card-body">
                                <img src="{{ ($player_img) ? $player_img->temporaryUrl() : $this->player->player_img)}}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                    @if ($card_identy_front || $this->player->card_identy_front)
                        <div class="card">
                            <div class="card-header">
                                صورة الوجه الامامي للبطاقة الشخصية
                            </div>
                            <div class="card-body">
                                <img src="{{ ($card_identy_front) ? $card_identy_front->temporaryUrl() :  $this->player->card_identy_front }}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                    @if ($card_identy_back || $this->player->card_identy_back)
                        <div class="card">
                            <div class="card-header">
                                صورة الوجه الخلفي للبطاقة الشخصية
                            </div>
                            <div class="card-body">
                                <img src="{{ ($card_identy_back) ? $card_identy_back->temporaryUrl() :$this->player->card_identy_front }}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                    @if ($birth_doc || $this->player->birth_doc)
                        <div class="card">
                            <div class="card-header">
                                صورة شهادة الميلاد
                            </div>
                            <div class="card-body">
                                <img src="{{ ($birth_doc) ? $birth_doc->temporaryUrl() :  $this->player->birth_doc }}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                    @if ($father_check_doc || $this->player->father_check_doc)
                        <div class="card">
                            <div class="card-header">
                                صورة موافقة ولي الامر
                            </div>
                            <div class="card-body">
                                <img src="{{ ($father_check_doc) ? $father_check_doc->temporaryUrl() :$this->player->father_check_doc}}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                    @if ($father_identy_card || $this->player->father_identy_card)
                        <div class="card">
                            <div class="card-header">
                                صورة البطاقة الشخصية لولي الامر
                            </div>
                            <div class="card-body">
                                <img src="{{ ($father_identy_card) ? $father_identy_card->temporaryUrl() : $this->player->father_identy_card }}" style="height: 150px; width:100%">
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
