@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
        <form method="post" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="icon-circle-medium  icon-box-lg  warning-bell sidebar-dark">
                    <i class="fas fa-dolly fa-fw fa-sm text-primary"></i>
                </div>
                <div class="card-header">
                    <h5 class="mb-0" style="margin-left: 4rem;">Create a Products</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <input id="name" type="text" value="" class="form-control form-control-lg"
                                    value="{{ old('name') }}" name="name">
                                @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Price</label>
                                <input id="name" type="number" value="{{ old('price') }}"
                                    class="form-control form-control-lg" name="price">
                                @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select class="form-control form-control-lg" name="status">
                                        <option value="">--Select--</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Not active</option>

                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status" class="col-form-label">Material</label>
                                    <select class="form-control form-control-lg" name="is_material">
                                        <option value="">--Select--</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>

                                    </select>
                                    @error('is_material')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category" class="col-form-label">Category</label>
                                <select class="form-control form-control-lg" name="category_id">
                                    <option value="">--Select--</option>
                                    @forelse ($categories as $item)
                                    <option value="{{ $item->id }}">{{$item->name}}</option>
                                    @empty

                                    @endforelse

                                </select>
                                @error('category_id')
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
                                    {{ old('description') }}
                                    </textarea>
                                @error('description')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status" class="col-form-label">Category Image</label>
                                <input type="file" class="form-control" name='image'>
                                @error('image')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mt-2 card-action">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
