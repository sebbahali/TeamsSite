<x-dashboard.layouts.auth>
    <x-slot name="title">تسجيل الدخول</x-slot>
    
   
            
<div style="border: 1px solid LightGray; border-radius: 12px;   margin: 10px;  padding: 30px;  outline-offset: 0.5em;" >
    <h4 class="text-center">تسجيل الدخول</h4>

    @if ($errors->any())
        <div style=font-size:14px class="alert alert-danger text-center" ><strong>عذرا !</strong>
         أدخلت بريد الكتروني او كلمة السر خطأ.</div>
    @endif

    @if (session('dashboard_success_message'))
        <div class="alert alert-success text-center">{{ session('dashboard_success_message') }}</div>
    @endif

    <form action="{{ route('dashboard.login') }}" method="POST" class="pt-3">
        @csrf

        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="البريد الالكتروني">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="كلمة السر">
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" name="remember" class="form-check-input"> تذكرني </label>
            </div>
            <a href="{{ route('dashboard.password.request') }}" class="auth-link text-black">هل نسيت كلمة السر ؟</a>
        </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">تسجيل الدخول</button>
        </div>
    </form>
</x-dashboard.layouts.auth>

