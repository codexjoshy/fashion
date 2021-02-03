@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <form method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="icon-box-sm card-header" style="display: flex; align-items: center;">
                    <i class="fas fa-user fa-fw fa-sm text-primary mr-3"></i>
                    <h5 class=" mb-0">My Profile</h5>
                </div>

                <div class="card-body">
                    <div class="col-12 text-center">
                        <div class="w-25 h-25 m-auto">
                            <img src="{{ Storage::url($user->avatar) }}" class="profile__image img-fluid"
                                alt="profile picture">
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <span class="input__filespan btn btn-rounded btn-brand">
                            <input type="file" class="avatar_input" name="avatar">
                            <span class="avatar__span">Select image</span>
                        </span>
                        @error('avatar')
                        <span class="invalid-feedback  d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Full Name</label>
                                <input id="name" type="text" placeholder="name" class="form-control form-control-lg"
                                    value="{{ $user->name }}" readonly>
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
                                <input id="email" type="text" readonly value="{{ $user->email }}"
                                    class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile" class="col-form-label">Mobile Number</label>
                                <input id="mobile" type="number" value="{{ $user->phone }}"
                                    class="form-control form-control-lg" name="mobile">
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
                                <input id="address" type="text" value="{{ $user->address }}"
                                    class="form-control form-control-lg" name="address">
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
                                <input id="city" type="text" value="{{ $user->city }}"
                                    class="form-control form-control-lg" name="city">
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
                                <input id="state" type="text" value="{{ $user->state }}"
                                    class="form-control form-control-lg" name="state">
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
                                <input id="country" type="text" value="{{ $user->country }}"
                                    class="form-control form-control-lg" name="country" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="current_password" class="col-form-label">Current password</label>
                                <input id="current_password" type="password" value=""
                                    class="form-control form-control-lg" name="current_password">
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
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@can('isTailor')
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <form method="post" action="{{ route('user.tailor.profile') }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="icon-box-sm card-header" style="display: flex; align-items: center;">
                    <i class="fas fa-user fa-fw fa-sm text-primary mr-3"></i>
                    <h5 class=" mb-0">Company Details</h5>
                </div>

                <div class="card-body">

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="company_name" class="col-form-label">Company Name</label>
                                <input name="company_name" id="company_name" type="text"
                                    placeholder="Enter Company name" class="form-control form-control-lg"
                                    value="{{ @$tailor->company_name }}">
                                @error('company_name')
                                <span class="invalid-feedback  d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea id="description" rows="8" class="form-control form-control-lg"
                                    name="description">
                                    {{ @$tailor->description }}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback  d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country" class="col-form-label">Country</label>
                                <input id="country" type="text" value="{{ $user->country }}"
                                    class="form-control form-control-lg" name="country" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tailor_current_password" class="col-form-label">Current password</label>
                                <input id="tailor_current_password" type="password" value=""
                                    class="form-control form-control-lg" name="tailor_current_password">
                                <span class="text-danger  text-center d-block">Type your current password to save
                                    changes</span>
                                @error('tailor_current_password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12 card-action">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        @if (!@$tailor->account_name)
        <form method="post" action="{{ route('user.banks.store') }}">
            @csrf
            @else

            @endif

            <div class="card">
                <div class="icon-circle-medium  icon-box-lg  warning-bell sidebar-dark">
                    <i class="fas fa-dolly fa-fw fa-sm text-primary"></i>
                </div>
                <div class="card-header">
                    <h5 class="mb-0" style="margin-left: 4rem;">Bank Account</h5>
                </div>
                <div class="card-body">
                    @if (!@$tailor->account_name)
                    <p class="text-warning">Note: This can be done once. For futher change reach out to customer support
                    </p>
                    @else
                    <p class="text-info">Note: Kindly Submit a rquest to update your account details </p>

                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_name" class="col-form-label">Bank</label>
                                <input id="bank_name" type="text"
                                    value="{{ old('bank_name', optional($tailor)->bank_name) }}"
                                    class="form-control form-control-lg" name="bank_name" required
                                    {{ optional($tailor)->bank_name ? 'readonly' : '' }}>
                                @error('bank_name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_name" class="col-form-label">Account Name</label>
                                <input id="account_name" type="text"
                                    value="{{ old('account_name', optional($tailor)->account_name) }}"
                                    class="form-control form-control-lg" name="account_name" required
                                    {{ optional($tailor)->account_name ? 'readonly' : '' }}>
                                @error('account_name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number" class="col-form-label">Account Number</label>
                                <input id="account_number" type="number"
                                    value="{{ old('account_number', optional($tailor)->account_number) }}"
                                    class="form-control form-control-lg" name="account_number" required
                                    {{ optional($tailor)->account_number ? 'readonly' : '' }}>
                                @error('account_number')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @if (!@$tailor->account_name)
                    <div class="col-12 mt-2 card-action">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    @else
                    <div class="col-12 mt-2 card-action">
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#requestForm">Submit
                            request</button>
                    </div>
                    @endif
                </div>
            </div>
    </div>
    @if ($tailor)
    </form>
    @else

    @endif
</div>
@endcan

<div class="modal fade" tabindex="-1" role="dialog" id="requestForm">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('user.banks.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Account Account Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Note: Your rquest to change account details will be sent to the Admin </p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank" class="col-form-label">Bank</label>
                                <input id="bank" type="text" value="{{ old('bank', optional($tailor)->bank_name) }}"
                                    class="form-control form-control-lg" name="bank" required>
                                @error('bank')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Account Name</label>
                                <input id="name" type="text" value="{{ old('name', optional($tailor)->account_name) }}"
                                    class="form-control form-control-lg" name="name" required>
                                @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="number" class="col-form-label">Account Number</label>
                                <input id="number" type="text"
                                    value="{{ old('number', optional($tailor)->account_number) }}"
                                    class="form-control form-control-lg" name="number" required>
                                @error('number')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="number" class="col-form-label">Why are you changing your detail?</label>
                                <textarea class="form-control form-control-lg" name="reason" id="" cols="30" rows="10"
                                    required></textarea>
                                @error('reason')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send Request</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
