<x-dashboard.layouts.app>
    <x-slot name="title">تسجيل فريق اهلي</x-slot>
    
    <div class="container">
        <div class="row">
           <div class="col-12">
            <x-card.main title="تسجيل فريق أهلي" >
            
             <a class="btn btn-success btn-sm" href="{{ route('dashboard.teams.index') }}" title="رجوع">
                            <i  class="mdi mdi-arrow-right-bold"></i>
                        </a>
                      <hr>
                    <form action="{{ route('dashboard.teams.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample mt-4">
                        @csrf

                        <div class="form-group">
                            <label for="name">اسم الفريق</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="اكتب اسم الفريق">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="logo">شعار الفريق</label>
                            <input type="file" name="logo" class="form-control" id="logo" placeholder="الرجاء اختيار شعار الفريق">

                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">البريد الالكتروني</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="اكتب البريد الالكتروني">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">اسم المستخدم</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="username" placeholder="اكتب اسم المستخدم">

                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="اكتب كلمة السر">

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">تأكيد كلمة السر</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="اكتب كلمة السر">
                        </div>

                        <div class="form-group">
                            <label for="user_fullname">اسم امين السر</label>
                            <input type="text" name="user_fullname" value="{{ old('user_fullname') }}" class="form-control" id="user_fullname" placeholder="اسم امين السر">

                            @error('user_fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" id="phone" placeholder="ادخل رقم الهاتف">

                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message_code">رمز رسائل الفريق</label>
                            <input type="text" name="message_code" value="{{ old('message_code') }}" class="form-control" id="message_code" placeholder="ادخل رمز رسائل الفريق">

                            @error('message_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">وصف الفريق</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="وصف الفريق">{{ old('description') }}</textarea>

                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">تسجيل الفريق الاهلي</button>
                    </form>
                    </x-card.main>
                </div>
            </div>
          </div>
</x-dashboard.layouts.app>
