<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <h2 class="card-title mb-4">تعديل بيانات النادي</h2>
        <div class="row">
            <div class="col-md-6">
                <form class="forms-sample" wire:submit.prevent="save">
                    <div class="form-group">
                        <label for="name">اسم النادي</label>
                        <input type="text" class="form-control" id="name" placeholder="اسم النادي"
                            wire:model="name"
                        />

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="founded_date">تاريخ تأسيس النادي</label>
                        <input type="date" class="form-control" id="founded_date" placeholder="تاريخ تأسيس النادي"
                            wire:model="foundedDate"
                        />

                        @error('foundedDate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" class="form-control" id="email" placeholder="البريد الالكتروني"
                            wire:model="email"
                        />

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook_link">رابط الفيسبوك</label>
                        <input type="text" class="form-control" id="facebook_link" placeholder="رابط الفيسبوك"
                            wire:model="facebook_link"
                        />

                        @error('facebook_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twitter_link">رابط التويتر</label>
                        <input type="text" class="form-control" id="twitter_link" placeholder="رابط التويتر"
                            wire:model="twitter_link"
                        />

                        @error('twitter_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram_link">رابط الانستقرام</label>
                        <input type="text" class="form-control" id="instagram_link" placeholder="رابط الانستقرام"
                            wire:model="instagram_link"
                        />

                        @error('instagram_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="text" class="form-control" id="phone" placeholder="رقم الهاتف"
                            wire:model="phone"
                        />

                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">وصف النادي</label>
                        <textarea class="form-control" id="description" rows="4"
                            wire:model="description"
                        ></textarea>

                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vision">رؤيتنا</label>
                        <textarea class="form-control" id="vision" rows="4"
                            wire:model="vision"
                        ></textarea>

                        @error('vision')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">رسالتنا</label>
                        <textarea class="form-control" id="message" rows="4"
                            wire:model="message"
                        ></textarea>

                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="philosphoy">فلسفتنا</label>
                        <textarea class="form-control" id="philosphoy" rows="4"
                            wire:model="philosphoy"
                        ></textarea>

                        @error('philosphoy')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/logo.png') }}"
                        width="100px" alt="User profile picture">
                </div>
                <h3 class="text-center my-4">{{ $club->name }}</h3>
                <div class="mb-5">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <td>تاريخ التاسيس</td>
                                <td>
                                    <x-dashboard.partials.display-if-not-null data="{{ $foundedDate }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>البريد الالكتروني</td>
                                <td>
                                    <x-dashboard.partials.display-if-not-null data="{{ $email }}" />
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card mt-3">
                        <h5 class="mb-3">وصف النادي</h5>
                        <x-dashboard.partials.display-if-not-null data="{{ $description }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
