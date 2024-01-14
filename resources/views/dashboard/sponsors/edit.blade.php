<x-dashboard.layouts.app>
    <x-slot name="title">تعديل بيانات الراعي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تعديل بيانات الراعي">
                    <form class="my-3" action="{{ route('dashboard.sponsors.update', $sponsor) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.group label="الاسم" for="name" :error="$errors->first('name')">
                            <x-form.input type="text" id="name" name="name" value="{{ $sponsor->name }}" placeholder="الاسم" />
                        </x-form.group>
                        <x-form.group label="الصورة" for="image" :error="$errors->first('image')">
                            <x-form.input type="file" id="image" name="image" placeholder="الصورة" />
                        </x-form.group>


                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> تعديل الراعي</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
