<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Warnet</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::is('dashboard', '/')) active @endif">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-th-large"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item @if(Request::is('user')) active @endif">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-users"></i>
            <span>Master Member</span></a>
    </li>
    <li class="nav-item @if(Request::is('computer')) active @endif">
        <a class="nav-link" href="{{ route('computer.index') }}">
            <i class="fa fa-desktop"></i>
            <span>Master Komputer</span></a>
    </li>
    <li class="nav-item @if(Request::is('booking')) active @endif">
        <a class="nav-link" href="{{ route('booking.index') }}">
            <i class="fa fa-bookmark"></i>
            <span>Booking</span></a>
    </li>
    <li class="nav-item @if(Request::is('transaction')) active @endif">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fa fa-shopping-cart"></i>
            <span>Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a href="nav-link"></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>