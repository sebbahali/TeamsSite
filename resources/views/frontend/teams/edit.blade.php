<x-frontend.layouts.app>
    <x-slot name="title">تعديل بيانات الفريق</x-slot>
    <div class="container">
        <div class="row">
             <div class="col-12">
                    <x-card.main title="تعديل بيانات الفريق">

                    <form action="{{ route('frontend.teams.update') }}" method="POST" class="forms-sample mt-4">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">اسم الفريق</label>
                            <input type="text" name="name" value="{{ $team->name }}" class="form-control" id="name" placeholder="اكتب اسم الفريق">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">البريد الالكتروني</label>
                            <input type="text" name="email" value="{{ $team->email }}" class="form-control" id="email" placeholder="اكتب البريد الالكتروني">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">اسم المستخدم</label>
                            <input type="text" name="username" value="{{ $team->username }}" class="form-control" id="username" placeholder="اكتب اسم المستخدم">

                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="user_fullname">اسم امين السر</label>
                            <input type="text" name="user_fullname" value="{{ $team->user_fullname }}" class="form-control" id="user_fullname" placeholder="اسم امين السر">

                            @error('user_fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" name="phone" value="{{ $team->phone }}" class="form-control" id="phone" placeholder="ادخل رقم الهاتف">

                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message_code">رمز رسائل الفريق</label>
                            <input type="text" name="message_code" value="{{ $team->message_code }}" class="form-control" id="message_code" placeholder="رمز رسائل الفريق">

                            @error('message_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">وصف الفريق</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="وصف النادي">{{ $team->description }}</textarea>

                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">حفظ البيانات</button>
                    </form>
                
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
