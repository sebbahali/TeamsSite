<x-frontend.layouts.auth>
    <x-slot name="title">تأكيد كلمة السر</x-slot>

    <h4 class="text-center">تأكيد كلمة السر</h4>

    @if ($errors->any())
        <div class="alert alert-danger text-center">كلمة السر خطأ الرجاء المحاولة مرة اخرى</div>
    @endif

    <form action="{{ route('frontend.password.confirm') }}" method="POST" class="pt-3">
        @csrf

        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="كلمة السر" required autocomplete="current-password">
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">تأكيد كلمة السر</button>
        </div>
    </form>
</x-frontend.layouts.auth>
