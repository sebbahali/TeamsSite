<x-dashboard.layouts.app>
    <x-slot name="title">اضافة مستخدم جديد</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="اضافة مستخدم جديد">
                    <form class="my-3" action="{{ route('dashboard.users.store') }}" method="POST">
                        @csrf

                        <x-form.group label="الاسم" for="name" :error="$errors->first('name')">
                            <x-form.input type="text" id="name" name="name" placeholder="الاسم" />
                        </x-form.group>
                        <x-form.group label="البريد الالكتروني" for="email" :error="$errors->first('email')">
                            <x-form.input type="text" id="email" name="email" placeholder="البريد الالكتروني" />
                        </x-form.group>
                        <x-form.group label="الدور الوظيفي" for="role" :error="$errors->first('role')">
                            <x-form.select id="role" name="role" placeholder="الدور الوظيفي">
                                <option selected value="" disabled>اختر الوظيفة</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}" @if(old('role') == $role->name) {{ "selected" }} @endif>{{ $role->display_name }}</option>
                                @endforeach
                            </x-form.select>
                        </x-form.group>
                        <x-form.group label="كلمة السر" for="password" :error="$errors->first('password')">
                            <x-form.input type="password" id="password" name="password" placeholder="كلمة السر" />
                        </x-form.group>
                        <x-form.group label="تاكيد كلمة السر" for="password_confirmation" :error="$errors->first('password_confirmation')">
                            <x-form.input type="password" id="password_confirmation" name="password_confirmation" placeholder="تاكيد كلمة السر" />
                        </x-form.group>


                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> اضافة المستخدم</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
