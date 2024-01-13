<x-frontend.layouts.app>
    <x-slot name="title">تغيير كلمة السر</x-slot>
    <div class="container">
        <div class="row">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">تغيير كلمة السر</h4>

                    <form action="{{ route('frontend.teams.save-password', $team->slug) }}" method="POST" enctype="multipart/form-data" class="forms-sample mt-4">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="password">كلمة السر الجديدة</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="اكتب كلمة السر">

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">تأكيد كلمة السر الجديدة</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="اكتب كلمة السر">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">حفظ كلمة السر</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
