<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" href="{{ route('user.dashboard') }}"
        aria-expanded="false"><i class="mdi mdi-home"></i>Dashboard</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.dashboard') }}" aria-expanded="false"><i
            class="mdi mdi-cart"></i>Orders</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('profile') ? 'active': '' }}" href="{{ route('user.profile') }}"
        aria-expanded="false"><i class="mdi mdi-account"></i>Profile</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="{{ route('user.dashboard') }}" aria-expanded="false"><i
            class="mdi mdi-message"></i>Contact
        Support</a>
</li>
