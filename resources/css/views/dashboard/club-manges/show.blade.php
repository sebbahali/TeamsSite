<x-dashboard.layouts.app>
    <x-slot name="title">ادارات النادي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="أعضاء الإدارة">

                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @if (!$clubMange->isActive())
                            <div class="form-check mx-sm-2">
                                <button disabled class="btn btn-primary btn-sm" title="اضافة عضو جديد">
                                    <i class="mdi mdi-account-plus"></i>
                                </button>
                            </div>
                        @else
                            <div class="form-check mx-sm-2">
                                <a href="{{ route('dashboard.club-mange-members.create', $clubMange->id) }}"
                                    class="btn btn-primary btn-sm" title="اضافة عضو جديد">
                                    <i class="mdi mdi-account-plus"></i>
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="preview-list mb-3">
                        <div class="row">
                            @forelse ($members as $member)
                                <div class="col-md-6 mt-2">
                                    <div class="card mb-3 border" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{ $member->avatar }}"
                                                    class="img-fluid rounded-end h-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">{{ $member->name }}</h5>
                                                    <span class="d-block">
                                                        <i class="mdi mdi-settings"></i>
                                                        {{ $member->role->value }}
                                                    </span>
                                                    @if ($member->email)
                                                        <span class="d-block">
                                                            <i class="mdi mdi-email-outline"></i>
                                                            {{ $member->email }}
                                                        </span>
                                                    @endif
                                                    <span class="d-block">
                                                        <i class="mdi mdi-cellphone-android"></i>
                                                        {{ $member->phone }}
                                                    </span>

                                                    <div class="mt-3">
                                                        <a href="{{ route('dashboard.club-mange-members.edit', $member->id) }}" class="btn btn-info btn-sm" title="تعديل"><i class="mdi mdi-grease-pencil"></i></a>
                                                        <form id='delteForm' action="{{ route('dashboard.club-mange-members.destroy', $member->id) }}" method="post" style="display:inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm delete-confirmation" title="حذف">
                                                                <i class="mdi mdi-delete"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-info mt-3 text-center">لا يوجد بيانات لعرضها</div>
                            @endforelse
                        </div>
                    </div>

                    <x-slot name="paginate">
                        {{ $members->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
