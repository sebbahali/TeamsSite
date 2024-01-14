<x-dashboard.layouts.app>
    <x-slot name="title">تعديل بياناتي</x-slot>
    <div class="container">
        <div class="row">
        <div class="col-12">
                <x-card.main class="px-3" title="  تعديل بياناتي">
            <div class="card mb-5">
                <div class="card-body">
                   

                    <button class="btn btn-success mt-3" type="button" onclick="initFirebaseMessagingRegistration()"><i class="mdi mdi-bell-ring-outline"></i> ضبط الجهاز للاشعارات</button>

                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{ route('dashboard.users.profile') }}" method="POST" enctype="multipart/form-data" class="forms-sample mt-4">
                                @csrf
                                @method('PATCH')

                                <div class="form-group">
                                    <label for="name">الاسم</label>
                                    <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control" id="name" placeholder="اكتب اسمك">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">البريد الالكتروني</label>
                                    <input type="text" name="email" value="{{ old('email') ?? $user->email }}" class="form-control" id="email" placeholder="اكتب البريد الالكتروني">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="alert alert-info">اترك كلمة السر فارغة اذا كنت لا تريد تغييرها</div>

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

                                <button type="submit" class="btn btn-primary me-2">تعديل البيانات</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <x-card.main title="الصورة الشخصية" class="py-1">
                                <img src="{{ $user->logo }}" width="100%" height="200px"/>
                            </x-card.main>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="mdi mdi-file-image"></i>
                                تغيير الشعار
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('dashboard.users.change-avatar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">تغيير شعار النادي</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="logo">شعار النادي</label>
                            <input type="file" name="logo" class="form-control" id="logo"
                                placeholder="الرجاء اختيار شعار النادي">

                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
                </x-card.main>
            </div>
        </div>
    </div>
    </div>
</x-dashboard.layouts.app>
