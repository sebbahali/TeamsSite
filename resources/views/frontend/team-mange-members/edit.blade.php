<x-frontend.layouts.app>
    <x-slot name="title">تعديل عضو جديد</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تعديل عضو جديد">
                    <form class="my-4" action="{{ route('frontend.team-mange-members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.group label="الاسم" for="name" :error="$errors->first('name')">
                            <x-form.input type="text" id="name" name="name" value="{{ $member->name }}" placeholder="الاسم" />
                        </x-form.group>
                        <x-form.group label="البريد الالكتروني" for="email" :error="$errors->first('email')">
                            <x-form.input type="text" id="email" name="email" value="{{ $member->email }}" placeholder="البريد الالكتروني" />
                        </x-form.group>
                        <x-form.group label="صورة العضو" for="image" :error="$errors->first('image')">
                            <x-form.input type="file" id="image" name="image" placeholder="صورة العضو" />
                        </x-form.group>
                        <x-form.group label="رقم الهاتف" for="phone" :error="$errors->first('phone')">
                            <x-form.input type="tel" id="phone" name="phone" value="{{ $member->phone }}" placeholder="رقم الهاتف" />
                        </x-form.group>
                        <x-form.group label="الدور الوظيفي" for="role" :error="$errors->first('role')">
                            <x-form.select id="role" name="role" placeholder="الدور الوظيفي">
                                <option value="">اختر الدور الوظيفي</option>
                                <option value="{{ \App\Enums\TeamMangeRole::Secretary->value }}" @if($member->role->value == \App\Enums\TeamMangeRole::Secretary->value) selected @endif>{{ \App\Enums\TeamMangeRole::Secretary->value }}</option>
                                <option value="{{ \App\Enums\TeamMangeRole::Leader->value }}" @if($member->role->value == \App\Enums\TeamMangeRole::Leader->value) selected @endif>{{ \App\Enums\TeamMangeRole::Leader->value }}</option>
                                <option value="{{ \App\Enums\TeamMangeRole::ViceLeader->value }}" @if($member->role->value == \App\Enums\TeamMangeRole::ViceLeader->value) selected @endif>{{ \App\Enums\TeamMangeRole::ViceLeader->value }}</option>
                                <option value="{{ \App\Enums\TeamMangeRole::Member->value }}" @if($member->role->value == \App\Enums\TeamMangeRole::Member->value) selected @endif>{{ \App\Enums\TeamMangeRole::Member->value }}</option>
                            </x-form.select>
                        </x-form.group>


                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save"></i> تعديل بيانات العضو</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
