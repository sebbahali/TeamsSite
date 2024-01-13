<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="الاجتماعات">

                <div class="form-inline d-flex align-items-center border-bottom mb-2">

                    @role('superadministrator')
                        <div class="form-check mx-sm-2">
                            <label class="form-check-label" for="draft">
                                <input class="form-check-input" type="radio" id="draft" value="{{ \App\Enums\MettingStatus::Draft->value }}" wire:model="status" /> مسودة
                                <i class="input-helper"></i>
                            </label>
                        </div>
                    @endrole
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="sendToMember">
                            <input class="form-check-input" type="radio" id="sendToMember" value="{{ \App\Enums\MettingStatus::SendToMember->value }}" wire:model="status" /> مرسلة للاعضاء
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="approve">
                            <input class="form-check-input" type="radio" id="approve" value="{{ \App\Enums\MettingStatus::Approve->value }}" wire:model="status" /> معتمدة
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    @role('superadministrator')
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.mettings.create') }}" class="btn btn-primary btn-sm" title="اضافة محضر جديد">
                                <i class="mdi mdi-calendar-plus"></i>
                            </a>
                        </div>
                    @endrole
                </div>

                <div class="preview-list">
                    <table class="table table-bordered my-3">
                        <thead>
                            <tr>
                                <th>رقم المحضر</th>
                                <th>المكان</th>
                                <th>الاجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($mettings as $metting)
                            <tr>
                                <td>{{ $metting->number }}</td>
                                <td>{{ $metting->location }}</td>
                                <td>
                                    <a href="{{ route('dashboard.mettings.show', $metting->id) }}" class="btn btn-info btn-sm"><i class="mdi mdi-eye" title="فتح المحضر"></i></a>

                                    @role('superadministrator')
                                        <a href="{{ route('dashboard.mettings.edit', $metting->id) }}" class="btn btn-warning btn-sm"><i class="mdi mdi-pen" title="تعديل المحضر"></i></a>
                                    @endrole



                                    @ableTo('delete-mettings')
                                        <form id='delteForm'
                                            action="{{ route('dashboard.mettings.destroy', $metting->id) }}" method="post"
                                            style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-confirmation">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    @endableTo
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <div class="alert alert-info mt-3">لا يوجد اجتماعات لعرضها</div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <x-slot name="paginate">
                    {{ $mettings->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
