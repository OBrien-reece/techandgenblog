<div class="nav_list">
    <a href="{{ route('admin.index') }}" class="nav_link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class='bx bx-grid-alt nav_icon'></i>
        <span class="nav_name">Dashboard</span>
    </a>
    <a href="{{ route('admin.show') }}" class="nav_link {{ request()->is('admin/users') ? 'active' : '' }}">
        <i class='bx bx-user nav_icon'></i>
        <span class="nav_name">Users</span>
    </a>
    <a href="#" class="nav_link">
        <i class='bx bx-message-square-detail nav_icon'></i>
        <span class="nav_name">Messages</span>
    </a>
    <a href="#" class="nav_link">
        <i class='bx bx-bookmark nav_icon'></i>
        <span class="nav_name">Bookmark</span>
    </a>
    <a href="#" class="nav_link">
        <i class='bx bx-folder nav_icon'></i>
        <span class="nav_name">Files</span>
    </a>
    <a href="#" class="nav_link">
        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
        <span class="nav_name">Stats</span>
    </a>
</div>
