<x-admin.header />

<header class="header" id="header">
    <div class="header_toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>

</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">{{ $admin->name }}</span>
            </a>

            <x-admin.side-nav />

        </div>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>

    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('content')
    </div>
    <!--Container Main end-->

<x-admin.footer />
