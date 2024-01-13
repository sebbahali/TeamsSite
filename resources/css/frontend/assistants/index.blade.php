<x-frontend.layouts.app>
    <x-slot name="title">الجهاز الفني</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="الجهاز الفني">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                        <a class="btn btn-primary btn-sm mb-2 mx-2" href="{{ route('frontend.assistants.create') }}" title="اضافة لاعب معار خارجيا">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>

                    <div class="row mt-4 mb-5">
                        @forelse ($assistants as $assistant)
                            <div class="col-md-4">
                                <section class="player-card mt-5">
                                    <div class="card">
                                        <header>
                                            <a class="profile">
                                                <img src="{{ $assistant->sport_image }}" alt="Profile Image">
                                            </a>
                                        </header>

                                        <article>
                                            <h1>{{ $assistant->name }}</h1>
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
                                                <a href="{{ route('frontend.assistants.show', $assistant) }}" class="btn btn-primary btn-sm">عرض</a>
                                                <a href="{{ route('frontend.assistants.edit', $assistant) }}" class="btn btn-info btn-sm">تعديل</a>
                                                <form action="{{ route('frontend.assistants.destroy', $assistant) }}" method="POST"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger delete-confirmation btn-sm">حذف</button>
                                                </form>
                                            </div>
                                        </article>
                                    </div>
                                </section>
                            </div>
                        @empty
                            <div class="alert alert-info text-center">لا توجد بيانات لعرضها</div>
                        @endforelse
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
