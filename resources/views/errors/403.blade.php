@extends('layouts.error')
@section('title', '403')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="error-section">
                {{-- <img src="{{ url('/assets/images/404.jpg') }}" alt=""
                class="img-fluid"> --}}
                <div class="error-section-content">
                    <h1 class="display-3">Oops, Authorization error</h1>
                    <p> Kindly go back to homepage</p>
                    <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Back to homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
