<x-dashboard.layouts.app>
    <x-slot name="title">ادارة المستخدمين</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="ادارة المستخدمين">

                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @ableTo('create-users')
                            <div class="form-check mx-sm-2">
                                <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary btn-sm"
                                    title="اضافة مستخدم جديد">
                                    <i class="mdi mdi-plus"></i> اضافة مستخدم
                                </a>
                            </div>
                        @else
                            <div class="form-check mx-sm-2">
                                <button disabled class="btn btn-primary btn-sm" title="اضافة مستخدم جديد">
                                    <i class="mdi mdi-plus"></i> اضافة مستخدم
                                </button>
                            </div>
                        @endif
                    </div>


                    <div class="preview-list mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>الترتيب</th>
                                    <th>الاسم</th>
                                    <th>البريد الالكتروني</th>
                                    <th>الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>

                                            @ableTo('update-users')
                                                <a class="btn btn-sm btn-info"
                                                    href="{{ route('dashboard.users.edit', Illuminate\Support\Facades\Crypt::encrypt($user->id)) }}">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                            @else
                                                <button disabled class="btn btn-sm btn-info">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </button>
                                            @endableTo

                                            @ableTo('delete-users')
                                                <form action="{{ route('dashboard.users.destroy', $user) }}" method="post"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm delete-confirmation"><i
                                                            class="mdi mdi-delete"></i></button>
                                                </form>
                                            @else
                                                <button disabled class="btn btn-danger btn-sm">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            @endableTo
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-info mt-3 text-center">لا يوجد بيانات لعرضها</div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <x-slot name="paginate">
                        {{ $users->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
