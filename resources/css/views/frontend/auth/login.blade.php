<x-frontend.layouts.auth>
    <x-slot name="title">تسجيل الدخول</x-slot>

    <h4 class="text-center">تسجيل الدخول</h4>

    @if ($errors->any())
        <div class="alert alert-danger text-center">اسم المستخدم او كلمة السر خطأ.</div>
    @endif

    @if (session('frontend_success_message'))
        <div class="alert alert-success text-center">{{ session('frontend_success_message') }}</div>
    @endif

    <form action="{{ route('frontend.login') }}" method="POST" class="pt-3">
        @csrf

        <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="اسم المستخدم">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="كلمة السر">
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" name="remember" class="form-check-input"> تذكرني </label>
            </div>
            <a href="{{ route('frontend.password.request') }}" class="auth-link text-black">هل نسيت كلمة السر ؟</a>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">تسجيل الدخول</button>
        </div>
    </form>
</x-frontend.layouts.auth>
