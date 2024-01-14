<x-dashboard.layouts.app>
    <x-slot name="title">بيانات الفريق</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <x-card.main title="بيانات الفريق">
                <a  class="btn btn-success btn-sm mb-2" href="{{ route('dashboard.teams.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                       <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">
                                    <img src="{{ $team->logo }}" alt="profile"
                                        class="img-lg rounded-circle mb-3">
                                    <p>{{ $team->description }}</p>
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
                                        <a href="{{ route('dashboard.teams.edit-password', $team->slug) }}" class="btn btn-danger w-100">
                                            <i class="mdi mdi-key"></i>
                                            تغيير كلمة السر
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <a href="{{ route('dashboard.teams.edit', $team->slug) }}"
                                            class="btn btn-info"><i class="mdi mdi-grease-pencil"></i> تعديل</a>
                                        <form id='delteForm'
                                            action="{{ route('dashboard.teams.destroy', $team->slug) }}" method="post"
                                            style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-confirmation">
                                                <i class="mdi mdi-delete"></i>
                                                حذف
                                            </button>
                                        </form>
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
                                    <div>
                                        <a href="{{ route('dashboard.players.index', $team->slug) }}"
                                            class="btn btn-info"><i class="mdi mdi-account-multiple"></i> كشف اللاعبين</a>     
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
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-2">
                            <x-card.main title="الجهاز الفني" class="px-0">
                                <div class="row">
                                    @forelse ($team->assistants as $assistant)
                                        <div class="col-md-4 mb-4">
                                            <section class="player-card mt-5">
                                                <div class="card">
                                                    <header>
                                                        <a class="profile">
                                                            <img src="{{ $assistant->sport_image }}" alt="Profile Image">
                                                        </a>
                                                    </header>

                                                    <article>
                                                        <h1 style=font-size:15px>{{ $assistant->name }}</h1>
                                                        <div class="info">
                                                            <div>
                                                                <span><i class="mdi mdi-account-card-details"></i></span>
                                                                <span>{{ $assistant->card_id }}</span>
                                                            </div>
                                                            <div>
                                                                <span><i class="mdi mdi-calendar-multiple"></i></span>
                                                                <span>{{ $assistant->birthdate }}</span>
                                                            </div>
                                                            <div>
                                                                <span><i class="mdi mdi-account-network"></i></span>
                                                                <span>{{ $assistant->role->value }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="info mt-3">
                                                            <a href="{{ route('dashboard.teams.show-assistant', ['team' => $team, 'assistant' => $assistant]) }}" class="btn btn-primary btn-sm">عرض</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            </section>
                                        </div>
                                    @empty
                                        <div class="alert alert-info text-center">لا يوجد بيانات لعرضها</div>
                                    @endforelse
                                </div>
                            </x-card.main>
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
                <form action="{{ route('dashboard.teams.change-logo', $team->slug) }}" method="POST"
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
                </x-card.main>
            </div>
        

</x-dashboard.layouts.app>
