<header class="header-desktop2">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap2">
                <div class="logo d-block d-lg-none">
                    <a href="#">
                        <img src="" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header-button2">
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-search"></i>
                        <div class="search-dropdown js-dropdown">
                            <form action="">
                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                <span class="search-dropdown__icon">
                                    <i class="zmdi zmdi-search"></i>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item mr-0 js-sidebar-btn">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
    <div class="logo">
        <a href="/admin-dashboard">
            <img src="images/icon/logo-white.png" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar2">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="admin/images/user.jpg"/>
            </div>
            <h4 class="name">{{ Auth::user()->name }}</h4>
            {{-- <a href="{{ route('signout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Sign Out</a> --}}
            <form id="logout-form" action="{{ route('signout') }}" method="POST">
                @csrf
                <button class="text-muted" type="submit">Sign Out</button>
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                {{-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="/admin-dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <span class="inbox-num">3</span>
                </li>
                <li>
                    <a href="/manage-users">
                        <i class="fas fa-chart-bar"></i>Manage Users</a>
                    <span class="inbox-num">3</span>
                </li>
                <li>
                    <a href="/manage-agents-property">
                        <i class="fas fa-shopping-basket"></i>Manage Property</a>
                </li>
                <li>
                    <a href="/manage-reservation-requests">
                        <i class="fas fa-shopping-basket"></i>Reservation Requests</a>
                </li>
                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-trophy"></i>Features
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">
                                <i class="fas fa-sign-in-alt"></i>Login</a>
                        </li>
                        <li>
                            <a href="register.html">
                                <i class="fas fa-user"></i>Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">
                                <i class="fas fa-unlock-alt"></i>Forget Password</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">
                                <i class="fab fa-flickr"></i>Button</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">
                                <i class="far fa-window-maximize"></i>Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">
                                <i class="far fa-id-card"></i>Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">
                                <i class="far fa-bell"></i>Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">
                                <i class="fas fa-tasks"></i>Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">
                                <i class="far fa-window-restore"></i>Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">
                                <i class="fas fa-toggle-on"></i>Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">
                                <i class="fas fa-th-large"></i>Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">
                                <i class="fab fa-font-awesome"></i>FontAwesome</a>
                        </li>
                        <li>
                            <a href="typo.html">
                                <i class="fas fa-font"></i>Typography</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
<!-- END HEADER DESKTOP-->

<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->