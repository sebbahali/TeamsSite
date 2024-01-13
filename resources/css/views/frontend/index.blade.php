<x-frontend.layouts.app>
    <x-slot name="title">الرئيسية</x-slot>
    <div class="row">
        <div class="col-md-4 col-sm-6 stretch-card grid-margin">
            <a href="{{ route('frontend.players.index') }}" class="text-decoration-none d-block w-100">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">اللاعبين</h4>
                                <h2 class="mb-2">{{ $players }}</h2>
                            </div>
                            <div class="col-4">
                                <i class="mdi mdi-account-multiple float-right" style="font-size: 40px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 stretch-card grid-margin">
            <a href="{{ route('frontend.transfer-players.index') }}" class="text-decoration-none d-block w-100">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">طلبات النقل</h4>
                                <h2 class="mb-2">{{ $transferPlayers }}</h2>
                            </div>
                            <div class="col-4">
                                <i class="mdi mdi-airplane float-right" style="font-size: 40px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 stretch-card grid-margin">
            <a href="{{ route('frontend.loan-players.index') }}" class="text-decoration-none d-block w-100">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">طلبات الاستعارة</h4>
                                <h2 class="mb-2">{{ $loanPlayers }}</h2>
                            </div>
                            <div class="col-4">
                                <i class="mdi mdi-account-switch float-right" style="font-size: 40px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</x-frontend.layouts.app>
