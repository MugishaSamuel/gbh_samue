<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#" class="text-white display-5">
            GBH Admin
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="admin/images/user.jpg"/>
            </div>
            <h4 class="name text-center">{{ Auth::user()->name }}</h4>
            {{-- <a href="{{ route('signout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Sign Out</a> --}}
            <form id="logout-form" action="{{ route('signout') }}" method="POST">
                @csrf
                <button class="text-muted" type="submit">Sign Out</button>
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="/admin-dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="/manage-users">
                        <i class="fas fa-chart-bar"></i>Manage Users</a>
                </li>
                <li>
                    <a href="/manage-agents-property">
                        <i class="fas fa-shopping-basket"></i>Manage Property</a>
                </li>
                <li>
                    <a href="/manage-reservation-requests">
                        <i class="fas fa-shopping-basket"></i>Reservation Requests</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->