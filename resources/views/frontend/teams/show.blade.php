<x-frontend.layouts.app>
    <x-slot name="title">بيانات الفريق</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                     <x-card.main title="بيانات الفريق">
                     <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">
                                    <img src="{{$team->logo }}" alt="profile"
                                        class="img-lg rounded-circle mb-3">
                                    
                                    <div class="d-flex justify-content-between">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="mdi mdi-file-image"></i>
                                            تغيير شعار الفريق
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <!-- Button trigger modal -->
                                        <a href="{{ route('frontend.teams.edit-password') }}"
                                            class="btn btn-danger w-100">
                                            <i class="mdi mdi-key"></i>
                                            تغيير كلمة السر
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <!-- Button trigger modal -->
                                        <a href="{{ route('frontend.teams.edit') }}"
                                            class="btn btn-info w-100">
                                            <i class="mdi mdi-grease-pencil"></i>
                                            تعديل بيانات الفريق
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $team->name }}</h3>
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 mr-2 text-muted"><i class="mdi mdi-account-circle"></i>
                                                {{ $team->user_fullname }}</h5>
                                        </div>
                                    </div> 
                                </div>
                                <div class="mt-4 py-2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>اسم المستخدم</td>
                                            <td>{{ $team->username }}</td>
                                        </tr>
                                        <tr>
                                            <td>البريد الالكتروني</td>
                                            <td>{{ $team->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>رقم الهاتف</td>
                                            <td>{{ $team->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>رمز رسائل الفريق</td>
                                            <td>{{ $team->message_code }}</td>
                                        </tr> 
                                        <tr>
                                         <td colspan="2">
                                            <p> وصف الفريق :</p>
                                            <hr>
                                            <p>{{ $team->description }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                            
                                </div>
                            </div>
                        </div>
                       <br>
                       <hr>
                         <div class="container">
                            <div class="row">
                               <div class="col-12">
                                <x-card.main title="الصور المتحركة بصفحة الفريق">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#uploadHeaderImage"
                                    class="btn btn-success mb-3">اضافة صورة</button>
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <table class="table table-bordered">
                                    <tr>
                                        <td>الترتيب</td>
                                        <td>الصورة</td>
                                        <td>الاجراء</td>
                                    </tr>
                                    @forelse ($team->teamHeaderImage as $index => $image)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <img src="{{ getImg('teams/' . $image->name) }}"
                                                    style="width: 150px !important; height: 100px !important; border-radius: 0 !important">
                                            </td>
                                            <td>
                                                <form action="{{ route('frontend.teams.delete-header-image', ['image' => $image->id]) }}" method="post"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm delete-confirmation"><i
                                                            class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">لا يوجد بيانات لعرضها</td>
                                        </tr>
                                    @endforelse
                                </table>
                                <br>
                            </div>
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
                <form action="{{ route('frontend.teams.change-logo', $team->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">تغيير شعار الفريق</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="logo">شعار الفريق</label>
                            <input type="file" name="logo" class="form-control" id="logo"
                                placeholder="الرجاء اختيار شعار الفريق">

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
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="uploadHeaderImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="uploadHeaderImageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('frontend.teams.upload-header-image', $team->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadHeaderImageLabel">اضافة صورة</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="image">اضافة صورة</label>
                            <input type="file" name="image" class="form-control" id="image"
                                placeholder="الرجاء اختيار الصورة">

                            @error('image')
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
        </x-card.main>
    </div>

</x-frontend.layouts.app>
