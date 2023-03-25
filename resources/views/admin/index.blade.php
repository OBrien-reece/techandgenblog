<x-admin.header />

<header class="header" id="header">
    <div class="header_toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    {{--    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>--}}

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

    {{--Component for the card placeholder--}}
    <x-admin.cards>
        {{--Loopinng through a single card whilst placing new attributes via props--}}
        <x-admin.single-card class_1="card l-bg-cherry" class_2="fas fa-shopping-cart" card_title="Users" class_3="l-bg-cyan" counter="{{ $user_counter }}" growth_percentage="{{ $user_growth }}"/>
        <x-admin.single-card class_1="card l-bg-blue-dark" class_2="fas fa-users" card_title="Articles" class_3="l-bg-green" counter="{{ $article_counter }}" growth_percentage="{{ $article_growth }}"/>
        <x-admin.single-card class_1="card l-bg-green-dark" class_2="fas fa-ticket-alt" card_title="Admins" class_3="l-bg-orange" counter="{{ $admin_counter }}" growth_percentage="{{ $admin_growth }}"/>
    </x-admin.cards>
</div>
<!--Container Main end-->

<x-admin.footer />
