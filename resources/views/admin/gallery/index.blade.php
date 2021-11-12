@extends('layouts.app')
@section('title', 'Category')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">

@endpush
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Catallogues</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Material</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gallery as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price}}</td>
                                <td><a target="_blank" href="{{ Storage::url($item->image) }}">View Image</a></td>
                                <td>{{ $item->is_material }}</td>
                                <td>
                                    @if ($item->status == 'active')
                                    <span class="text-success">Active</span>
                                    @else
                                    <span class="text-danger">Not Active</span>
                                    @endif
                                </td>
                                <td> {{ $item->created_at->format('d M, Y H:i A') }}</td>
                                <td>
                                    {{-- <form action="{{ route('admin.packages.destroy', $package->id) }}"
                                    method="post" class="d-inline mr-2">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form> --}}
                                    @can('isAdmin')
                                    <a href="{{ route('admin.gallery.edit', $item->id ) }}"
                                        class="btn btn-sm btn-warning ">Edit</a>
                                    @endcan
                                </td>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
@endpush
