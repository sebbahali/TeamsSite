<x-dashboard.layouts.app>
    <x-slot name="title">اضافة خبر جديد</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="اضافة خبر جديد">
                    <form class="my-3" action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-form.group label="العنوان" for="title" :error="$errors->first('title')">
                            <x-form.input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group label="الصورة" for="image" :error="$errors->first('image')">
                            <x-form.input type="file" id="image" name="image" placeholder="الصورة" />
                        </x-form.group>

                        <x-form.group label="تفاصيل الخبر" for="body" :error="$errors->first('body')">
                            <livewire:trix id="body" :value="old('body')" />
                        </x-form.group>

                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> اضافة الخبر</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
