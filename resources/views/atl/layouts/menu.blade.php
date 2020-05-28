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
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    @auth
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="icon-power"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="../login"><i class="icon-power"></i><span>Login</span></a></li>
                    @endguest
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Меню</li>
                <li><a href="/"><i class="icon-speedometer"></i><span>Справочник</span></a></li>
                <li><a href="/doc"><i class="icon-diamond"></i><span>Документы</span></a></li>
                <li><a href="../jobportal/index.html"><i class="icon-badge"></i><span>Трям</span></a></li>
                @auth
                    <li class="header">Администратор</li>
                    <li><a href="/admin"><i class="icon-user"></i><span>Справочник</span></a></li>
                    <li><a href="/admin/people"><i class="icon-user"></i><span>Люди</span></a></li>
                    <li><a href="/admin/dept"><i class="icon-user"></i><span>Отделы</span></a>
                    <li><a href="/admin/posit"><i class="icon-user"></i><span>Должности</span></a>
                @endauth
                </li>

            </ul>
        </nav>
    </div>
</div>
