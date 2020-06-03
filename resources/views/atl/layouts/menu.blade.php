<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{ asset('assets/images/icon.svg') }}"
                alt="Oculux Logo" class="img-fluid logo"><span>Атлант-М Альянс</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png') }}" class="user-photo"
                    alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                    data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    @auth('admin')
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="../login"><i class="icon-login"></i><span>Login</span></a></li>
                    @endguest
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Меню</li>
                <li><a href="/"><i class="icon-speedometer"></i><span>Справочник</span></a></li>
                <li><a href="/doc"><i class="icon-doc"></i><span>Документы</span></a></li>
                @auth('ozch')
                <li><a href="/ozch"><i class="icon-badge"></i><span>ОЗЧ</span></a></li>
                @endauth
                @auth('admin')
                    <li class="header">Администратор</li>
                    <li><a href="/admin"><i class="icon-users"></i><span>Сотрудники</span></a></li>
                    <li><a href="/admin/dept"><i class="icon-briefcase"></i><span>Отделы</span></a></li>
                    <li><a href="/admin/posit"><i class="icon-user"></i><span>Должности</span></a></li>
                @endauth

            </ul>
        </nav>
    </div>
</div>
