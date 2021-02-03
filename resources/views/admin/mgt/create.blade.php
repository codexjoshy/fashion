@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="card">
                <div class="icon-box-sm card-header" style="display: flex; align-items: center;">
                    <i class="fas fa-user fa-fw fa-sm text-primary mr-3"></i>
                    <h5 class=" mb-0">Create User</h5>
                </div>

                <div class="card-body">
                    {{-- <div class="col-12 text-center">
                        <div class="w-25 h-25 m-auto">
                            <img src="{{ Storage::url }}" class="profile__image img-fluid"
                    alt="profile picture">
                </div>
            </div> --}}
            {{-- <div class="col-12 text-center mt-3">
                        <span class="input__filespan btn btn-rounded btn-brand">
                            <input type="file" class="avatar_input" name="avatar">
                            <span class="avatar__span">Select image</span>
                        </span>
                        @error('avatar')
                        <span class="invalid-feedback  d-block" role="alert">
                            <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div> --}}
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="col-form-label">Full Name</label>
                <input id="name" type="text" placeholder="name" class="form-control form-control-lg" value=""
                    name="name">
                @error('name')
                <span class="invalid-feedback  d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="col-form-label">Email Address</label>
                <input id="email" type="text" value="" name="email" class="form-control form-control-lg">
            </div>
            @error('email')
            <span class="invalid-feedback  d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="mobile" class="col-form-label">Mobile Number</label>
                <input id="mobile" type="number" value="" class="form-control form-control-lg" name="mobile">
                @error('mobile')
                <span class="invalid-feedback  d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="address" class="col-form-label">Address</label>
                <input id="address" type="text" value="" class="form-control form-control-lg" name="address">
                @error('address')
                <span class="invalid-feedback  d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="city" class="col-form-label">City</label>
                <input id="city" type="text" value="" class="form-control form-control-lg" name="city">
                @error('city')
                <span class="invalid-feedback  d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="state" class="col-form-label">State</label>
                <input id="state" type="text" value="" class="form-control form-control-lg" name="state">
                @error('state')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="country" class="col-form-label">Country</label>
                <input id="country" type="text" value="" class="form-control form-control-lg" name="country" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="type" class="col-form-label">Type</label>
                <select name="type" id="type" class="form-control">
                    <option>---- Choose type ----</option>
                    <option>customer</option>
                    <option>tailor</option>
                </select>

                @error('type')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="current_password" class="col-form-label">Current password</label>
                <input id="current_password" type="password" value="" class="form-control form-control-lg"
                    name="current_password">
                <span class="text-danger  text-center d-block">Type your current password to save
                    changes</span>
                @error('current_password')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12 card-action">
        <button type="submit" class="btn btn-primary">Create User</button>
    </div>
</div>
</div>
</form>
</div>

</div>




@endsection
@push('scripts')
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.profile__image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".avatar_input").change(function() {
            readURL(this);
        });

</script>

@endpush
