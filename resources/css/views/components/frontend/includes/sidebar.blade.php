<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item text-center pt-3 pb-3 border-bottom">
            <div>
                <img style="width: 70px" src="{{ team()->logo }}" alt="الشعار">
            </div>
            <div class="mt-3">
                <h4 style=font-size:17px >فريق {{ team()->name }}</h4>
                <h5 style="font-size:10px;font-family:"Droid Arabic Kufi";">{{ auth()->guard('team')->user()->user_fullname }}</h5>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.index') }}">
                <span class="menu-title">الرئيسية</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.teams.show') }}">
                <span class="menu-title">نبذة عن الفريق</span>
                <i class="mdi mdi-information-outline menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#players" aria-expanded="false"
                aria-controls="players">
                <span class="menu-title">اللاعبين</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
            <div class="collapse" id="players">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                        href="{{ route('frontend.players.create') }}">تسجيل لاعب</a></li>
                    <li class="nav-item"> <a class="nav-link"
                        href="{{ route('frontend.players.index') }}">اللاعبين المنتسبين</a></li>
                    <li class="nav-item"> <a class="nav-link"
                        href="{{ route('frontend.players.request-index') }}">طلبات تسجيل اللاعبين</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                aria-controls="general-pages">
                <span class="menu-title">الطلبات</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.loan-players.index') }}">الاستعارة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.transfer-players.index') }}">النقل</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.competitions.index') }}">
                <span class="menu-title">المسابقات</span>
                <i class="mdi mdi-trophy menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.assistants.index') }}">
                <span class="menu-title">الجهاز الفني</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.out-loan-players.index') }}">
                <span class="menu-title">الاعارة الخارجية</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#teamMessages" aria-expanded="false"
                aria-controls="teamMessages">
                <span class="menu-title">الرسائل</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-email-outline menu-icon"></i>
            </a>
            <div class="collapse" id="teamMessages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('frontend.team-messages.index') }}">رسائل الفرق</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('frontend.club-team-messages.index') }}">رسائل النادي</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.year-updates.show') }}">
                <span class="menu-title">التجديد السنوي</span>
                <i class="mdi mdi-calendar-clock menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.team-manges.index') }}">
                <span class="menu-title">ادارات الفريق</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank
                            Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">
                            Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li> --}}

    </ul>
</nav>
<!-- partial -->
