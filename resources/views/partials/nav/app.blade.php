<!-- ============================================================== -->
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('frontend.index') }}" aria-haspopup="true"
                        aria-expanded="false">Back
                        to Site</a>
                </li>
                @can('isAdmin')
                @if (\Request::route()->getPrefix() == '/customer' || \Request::route()->getPrefix() == '/tailor' )
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('admin.dashboard') }}" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="indicator"></span>
                        Go To Admin Panel
                    </a>
                </li>
                @endif
                @endcan

                @can('isTailor')
                @can('isCustomer')
                @if (\Request::route()->getPrefix() == '/admin')
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('tailor.dashboard') }}" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="indicator"></span>
                        Go To Tailor Panel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('user.dashboard') }}" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="indicator"></span>
                        Go To Customer Panel
                    </a>
                </li>
                @elseif (\Request::route()->getPrefix() == '/customer')
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('tailor.dashboard') }}" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="indicator"></span>
                        Go To Tailor Panel
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('user.dashboard') }}" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="indicator"></span>
                        Go To Customer Panel
                    </a>
                </li>
                @endif
                @endcan
                @endcan
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ Storage::url(auth()->user()->avatar) ?? asset('storage/avatars/default.png') }}"
                            class="user-avatar-md rounded-circle">
                        {{-- <img src="assets/images/avatar-1.jpg" alt=""
                            class="user-avatar-md rounded-circle"></a> --}}
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                            aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{ auth()->user()->name }}</h5>
                                {{-- <span class="status"></span><span class="ml-2">Available</span> --}}
                            </div>
                            <a class="dropdown-item" href="{{ route('user.profile') }}">
                                <i class="fas fa-user mr-2"></i>Account
                            </a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Pin</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="fas fa-power-off mr-2"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
