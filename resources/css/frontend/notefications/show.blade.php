<x-frontend.layouts.app>
    <x-slot name="title">الاشعارات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="card-header bg-primary">
            <h4 style=text-align:center class="card-title my-3 mx-3 text-white">اشعار طلب </h4>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">{{ $notefication->title }}</h4>
                         <hr>
                        <p>{{ $notefication->body }}</p>
                         <hr>
                         <br>
                        <a class="btn btn-success" href="{{ $notefication->link }}">الرابط</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-frontend.layouts.app>
