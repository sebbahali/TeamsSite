<x-dashboard.layouts.auth>
    <x-slot name="title">استعادة كلمة السر</x-slot>

    <h4 class="text-center">استعادة كلمة السر</h4>

    @error('email')
        <div class="alert alert-danger text-center">{{ $message }}</div>
    @enderror

    @if (session('dashboard_success_message'))
        <div class="alert alert-success text-center">{{ session('dashboard_success_message') }}</div>
    @endif

    <form action="{{ route('dashboard.password.email') }}" method="POST" class="pt-3">
        @csrf

        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="password" placeholder="البريد الالكتروني">
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">أرسال رابط استعادة كلمة السر</button>
        </div>
    </form>
</x-dashboard.layouts.auth>
