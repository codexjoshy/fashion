@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
        <form method="post" action="{{ route('admin.category.update', $category->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card">
                <div class="icon-circle-medium  icon-box-lg  warning-bell sidebar-dark">
                    <i class="fas fa-dolly fa-fw fa-sm text-primary"></i>
                </div>
                <div class="card-header">
                    <h5 class="mb-0" style="margin-left: 4rem;">Create Category</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <input id="name" type="text" value="{{ $category->name }}"
                                    class="form-control form-control-lg" name="name">
                                @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status" class="col-form-label">Status</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option value="">--Select--</option>
                                    <option {{ $category->status =='active' ? 'selected':'' }} value="active">Active
                                    </option>
                                    <option {{ $category->status =='inactive' ? 'selected':'' }} value="inactive">Not
                                        active</option>

                                </select>
                                @error('status')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea id="description" cols="5" rows="6" class="form-control form-control-lg"
                                    name="description">
                                {{ $category->description }}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="col-12 text-center">
                                <div class="w-50 h-50 m-auto">
                                    <img src="{{ Storage::url($category->image) }}" class="profile__image img-fluid"
                                        alt="profile picture">
                                </div>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <span class="input__filespan btn btn-rounded btn-brand">
                                    <input type="file" class="avatar_input" name="image">
                                    <span class="avatar__span">Select image</span>
                                </span>
                                @error('image')
                                <span class="invalid-feedback  d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mt-2 card-action">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
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
