<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" href="{{ route('dashboard') }}"
        aria-expanded="false"><i class="mdi mdi-home"></i>Dashboard</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('profile') ? 'active': '' }}" href="{{ route('dashboard') }}"
        aria-expanded="false"><i class="mdi mdi-account"></i>Profile</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi mdi-message"></i>Contact
        Support</a>
</li>
