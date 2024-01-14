<x-dashboard.layouts.app>
    <x-slot name="title">تعديل بيانات اللاعب في المبارة</x-slot>

    <div class="container">
        <x-card.main title="تفاصيل اللاعب في المباراة">
        
            <form class="mt-4" action="{{ route('dashboard.match-assistants.update', ['match' => $match, 'assistant' => $assistant]) }}" method="POST">
                @csrf
                @method('PATCH')

                <x-form.group label="البطاقة الحمراء" for="r" :error="$errors->first('r')">
                    <x-form.input type="text" id="r" name="r" value="{{ old('r') ?? $assistant->r }}" placeholder="البطاقة الحمراء" />
                </x-form.group>

                <x-form.group label="البطاقة الصفراء" for="y" :error="$errors->first('y')">
                    <x-form.input type="text" id="y" name="y" value="{{ old('y') ?? $assistant->y }}" placeholder="البطاقة الصفراء" />
                </x-form.group>

                <button class="btn btn-primary mb-4">حفظ</button>
            </form>
        </x-card.main>

    </div>
</x-dashboard.layouts.app>