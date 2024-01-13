<x-dashboard.layouts.auth>
    <x-slot name="title">اعادة تعيين كلمة السر</x-slot>

    <h4 class="text-center">اعادة تعيين كلمة السر</h4>

    @error('token')
        <div class="alert alert-danger text-center">{{ $message }}</div>
    @enderror

    <form action="{{ route('dashboard.password.update') }}" method="POST" class="pt-3">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <input type="email" name="email" value="{{ old('email', $request->email) }}" class="form-control form-control-lg" id="email" placeholder="البريد الالكتروني">

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="كلمة السر">

            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password_confirmation" placeholder="تأكيد كلمة السر">
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">تعيين كلمة السر</button>
        </div>
    </form>
</x-dashboard.layouts.auth>
