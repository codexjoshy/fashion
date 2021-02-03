<li class="nav-item">
    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active': '' }}" href="{{ route('admin.dashboard') }}"
        aria-expanded="false"><i class="mdi mdi-highway"></i>Dashboard</a>
    <a class="nav-link {{ Request::is('admin/profile') ? 'active': '' }}" href="{{ route('admin.profile') }}"
        aria-expanded="false"><i class="mdi mdi-highway"></i>Profile</a>


<li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-packages"
        aria-controls="submenu-packages"><i class="fa fa-fw fa-user-circle"></i>User Management</a>
    <div id="submenu-packages" class="collapse submenu" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.create') }}">Create User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index', 'tailor') }}">Tailors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index', 'customer') }}">Customers</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::routeIs('admin.category.*') ? 'active': ''}}" href="#" data-toggle="collapse"
        aria-expanded="false" data-target="#submenu-category" aria-controls="submenu-category"><i
            class="fa fa-fw fa-user-circle"></i>Category</a>
    <div id="submenu-category" class="collapse submenu" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/category') ? 'active': '' }}"
                    href="{{ route('admin.category.create') }}">Create Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.category.index') }}">All Category</a>
            </li>
        </ul>
    </div>
</li>
</li>
