<x-dashboard.layouts.app>
    <x-slot name="title">معلومات النادي</x-slot>

    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ $club->logo }}" width="100px"
                    alt="User profile picture">
            </div>
            <h3 class="text-center my-4">{{ $club->name }}</h3>
            <hr>
            <h2 class="text-center my-4">بيانات ومعلومات عن النادي</h2>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="mb-1">
                        <table class="table text-center">
                            <tbody>
                                <tr>
                                    <td>تاريخ التاسيس</td>
                                    <td>
                                        <x-dashboard.partials.display-if-not-null data="{{ $club->founded_date }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>البريد الالكتروني</td>
                                    <td><x-dashboard.partials.display-if-not-null data="{{ $club->email }}" /></td>
                                </tr>
                                <tr>
                                    <td>رابط الفيسبوك</td>
                                    <td><x-dashboard.partials.display-if-not-null data="{{ $club->facebook_link }}" /></td>
                                </tr>
                                <tr>
                                    <td>رابط التويتر</td>
                                    <td><x-dashboard.partials.display-if-not-null data="{{ $club->twitter_link }}" /></td>
                                </tr>
                                <tr>
                                    <td>رابط الانستقرام</td>
                                    <td><x-dashboard.partials.display-if-not-null data="{{ $club->instagram_link }}" /></td>
                                </tr>
                                <tr>
                                    <td>رقم الهاتف</td>
                                    <td><x-dashboard.partials.display-if-not-null data="{{ $club->phone }}" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   <br>
                   <br>
                   <div class="mb-1">
                    <table class="table table-bordered mt-3">
                        <tr> 
                      <td>
                        <h5 class="mb-3">وصف النادي</h5></td>
                        <td><x-dashboard.partials.display-if-not-null data="{{ $club->description }}" /></td>
                          </tr>
                 
                   <tr> 
                      <td>
                        <h5 class="mb-3">رؤيتنا</h5></td>
                        <td><x-dashboard.partials.display-if-not-null data="{{ $club->vision }}" /></td>
                 </tr>
                    <tr> 
                      <td>
                        <h5 class="mb-3">رسالتنا</h5></td>
                       <td> <x-dashboard.partials.display-if-not-null data="{{ $club->message }}" /></td>
                   </tr>
                    <tr> 
                      <td>
                        <h5 class="mb-3">فلسفتنا</h5></td>
                        <td><x-dashboard.partials.display-if-not-null data="{{ $club->philosphoy }}" /></td>
                     </tr>
                   </table>
                   </div>
                   <br>
                    <div class="text-center d-flex" style="justify-content: space-evenly;">
                        <a href="{{ route('dashboard.clubs.edit', $club->slug) }}" class="btn btn-primary btn-block">
                            تعديل بيانات
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="mdi mdi-file-image"></i>
                            تغيير الشعار
                        </button>
               
                
        <!-- /.card-body -->
   </div>
  
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('dashboard.clubs.change-logo', $club->slug) }}" method="POST"
                    enctype="multipart/form-data">
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
                  </div>
               </div>
                </form>
           </div>
         </div>
    </div>
   </div>
    </div>
   
</x-dashboard.layouts.app>
