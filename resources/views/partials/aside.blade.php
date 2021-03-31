<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider text-center">
                        @if (\Request::route()->getPrefix() == '/admin')
                        <h3 style="color: #fff">Aministrator Panel</h3>
                        @elseif(\Request::route()->getPrefix() == '/tailor')
                        <h3 style="color: #fff">Tailors Panel</h3>
                        @elseif(\Request::route()->getPrefix() == '/customer')
                        <h3 style="color: #fff">Customer Panel</h3>
                        @else
                        @can('isAdmin')
                        <h3 style="color: #fff">Aministrator Panel</h3>
                        @elsecan('isTailor')
                        <h3 style="color: #fff">Tailors Panel</h3>
                        @elsecan('isCustomer')
                        <h3 style="color: #fff">Customer Panel</h3>
                        @endcan
                        @endif
                    </li>

                    @if (\Request::route()->getPrefix() == '/admin')
                    @include('partials.side-menu.admin')
                    @elseif (\Request::route()->getPrefix() == '/tailor')
                    @include('partials.side-menu.tailor')
                    @elseif(\Request::route()->getPrefix() == '/customer')
                    @include('partials.side-menu.user')
                    @else
                    @can('isAdmin')
                    @include('partials.side-menu.admin')
                    @elsecan('isTailor')
                    @include('partials.side-menu.tailor')
                    @elsecan('isCustomer')
                    @include('partials.side-menu.user')
                    @endcan
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
