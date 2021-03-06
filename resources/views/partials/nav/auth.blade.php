<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{ route('frontend.index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('frontend.index') }}" aria-haspopup="true"
                        aria-expanded="false">Back to Site</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('login') }}" aria-haspopup="true"
                        aria-expanded="false">Login</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link nav-icons" href="{{ route('register') }}" aria-haspopup="true"
                aria-expanded="false">Register</a>
                </li> --}}
                @endguest
            </ul>
        </div>
    </nav>
</div>