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
        <a class="nav_link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </nav>
</div>

    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('content')
    </div>
    <!--Container Main end-->

    @if(Session::has('message'))
        <script>
            toastr.options = {
                'progressBar' : true,
                "showMethod": "fadeIn",
                "positionClass": "toast-bottom-right",
                "hideMethod": "fadeOut",
                "closeButton": true,
                "newestOnTop": false,
            }
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif

<x-admin.footer />
