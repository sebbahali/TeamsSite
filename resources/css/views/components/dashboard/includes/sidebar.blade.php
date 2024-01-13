<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item text-center pt-3 pb-3 border-bottom">
            <div>
                <img style="width: 70px" src="{{ asset('images/logo.png') }}" alt="الشعار">
            </div>
            <div class="mt-3">
                <h4 style=font-size:14px>نادي قريات الرياضي الثقافي</h4>
                <h5 style="font-size:10px;font-family:"Droid Arabic Kufi";">{{ Auth::user()->name }}</h5>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <span class="menu-title">الرئيسية</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        @role('superadministrator')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.players.create') }}">
                    <span class="menu-title">تسجيل اللاعبين</span>
                    <i class="mdi mdi-flag-variant menu-icon"></i>
                </a>
            </li>
        @endrole

        @ableTo('read-teams')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.teams.index') }}">
                    <span class="menu-title">الفرق الاهلية</span>
                    <i class="mdi mdi-flag-variant menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-search-players')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.players-search.index') }}">
                <span class="menu-title">البحث عن اللاعبين</span>
                <i class="mdi mdi-account-search menu-icon"></i>
            </a>
        </li>
        @endableTo

        @ableTo('read-players')
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                    aria-controls="general-pages">
                    <span class="menu-title">الطلبات</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-medical-bag menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard.players.request-index') }}">تسجيل اللاعبين</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard.loan-players.index') }}">الاستعارة</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard.transfer-players.index') }}">نقل</a></li>
                    </ul>
                </div>
            </li>
        @endableTo

        @ableTo('read-clubs')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.clubs.show', 'qurayat') }}">
                    <span class="menu-title">معلومات النادي</span>
                    <i class="mdi mdi-information-outline menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-competitions')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.competitions.index') }}">
                    <span class="menu-title">المسابقات</span>
                    <i class="mdi mdi-trophy menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-out_loan_players')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.out-loan-players.index') }}">
                    <span class="menu-title">الاعارة الخارجية</span>
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
            </li>
        @endableTo

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#teamMessages" aria-expanded="false"
               aria-controls="teamMessages">
                <span class="menu-title">الرسائل</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-email-outline menu-icon"></i>
            </a>
            <div class="collapse" id="teamMessages">
                <ul class="nav flex-column sub-menu">
                    @ableTo('read-club_team_messages')
                        <li class="nav-item"> <a class="nav-link"
                                                 href="{{ route('dashboard.club-team-messages.index') }}">رسائل الفرق</a></li>
                    @endableTo
                    <li class="nav-item"> <a class="nav-link"
                                             href="{{ route('dashboard.club-messages.index') }}">رسائل النادي</a></li>
                </ul>
            </div>
        </li>

        @ableTo('read-year_updates')
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#yearUpdate" aria-expanded="false"
                aria-controls="yearUpdate">
                    <span class="menu-title">التجديد السنوي</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-calendar-clock menu-icon"></i>
                </a>
                <div class="collapse" id="yearUpdate">
                    <ul class="nav flex-column sub-menu">
                        @ableTo('create-year_updates')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.year-updates.create') }}">فتح التجديد</a>
                            </li>
                        @endableTo
                        @ableTo('read-year_updates')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.year-updates.show') }}">عرض التجديد</a>
                            </li>
                        @endableTo
                    </ul>
                </div>
            </li>
        @endableTo

        @ableTo('read-posts')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.posts.index') }}">
                    <span class="menu-title">الاخبار</span>
                    <i class="mdi mdi-newspaper menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-matches')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.matches.index') }}">
                    <span class="menu-title">المباريات</span>
                    <i class="mdi mdi-newspaper menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-sponsors')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.sponsors.index') }}">
                    <span class="menu-title">الرعاة</span>
                    <i class="mdi mdi-newspaper menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-mettings')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.mettings.index') }}">
                    <span class="menu-title">الاجتماعات</span>
                    <i class="mdi mdi-calendar-text menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-users')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.users.index') }}">
                    <span class="menu-title">المستخدمين</span>
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-clubs')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.club-manges.index') }}">
                    <span class="menu-title">ادارات النادي</span>
                    <i class="mdi mdi-account-star menu-icon"></i>
                </a>
            </li>
        @endableTo

        @ableTo('read-feedbacks')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.feedbacks.index') }}">
                    <span class="menu-title">التقييم</span>
                    <i class="mdi mdi-star menu-icon"></i>
                </a>
            </li>
        @endableTo

        @role('superadministrator')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laratrust.roles-assignment.index') }}" target="_blank">
                    <span class="menu-title">الصلاحيات و الادوار</span>
                    <i class="mdi mdi-security menu-icon"></i>
                </a>
            </li>
        @endrole
    </ul>
</nav>
<!-- partial -->

