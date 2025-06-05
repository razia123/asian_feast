@extends('backend.master')
@section('title', 'Category')

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Category</h1>
        <div class="ms-md-1 ms-0">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
        </div>
    </div>
    <div class="table-responsive mt-5">
        <table class="table text-nowrap">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ asset($category->image) }}" alt="" width="50" height="50">
                        </td>
                        <td>{{ @$category->name }}</td>
                        <td>{{ @$category->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <div class="hstack gap-2 fs-15">
                                <a href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                        class="ri-download-2-line"></i></a>
                                <a href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                        class="ri-edit-line"></i></a>
                                <a href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                        class="ri-delete-bin-line"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
