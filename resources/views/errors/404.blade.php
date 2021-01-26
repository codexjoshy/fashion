@extends('layouts.error')
@section('title', '404')

@section('content')

    
        <div class="container text-center">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="error-section">
                        {{-- <img src="{{ url('/assets/images/404.jpg') }}" alt=""
                            class="img-fluid"> --}}
                        <div class="error-section-content">
                            <h1 class="display-3">Page Not Found</h1>
                            <p> The page you requested can not be found.</p>
                            <a href="{{ route('user.dashboard') }}" class="btn btn-secondary btn-lg">Back to homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
