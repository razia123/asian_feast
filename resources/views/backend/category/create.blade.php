@extends('backend.master')
@section('title', 'Create Category')

@push('css')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Add Category</h1>
        <div class="ms-md-1 ms-0">
            {{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Category</a> --}}
        </div>
    </div>
    <div class="col-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Create</div>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Name</label>
                        <input type="text" name="category_name" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Type</label>
                        <select name="category_type" id="categoryType" class="form-select">
                            <option value="0">Select Parent Category</option>
                            <option value="regular">Regular</option>
                            <option value="set_menu">Set Menu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="form-password" class="form-label fs-14 text-dark">Image</label>
                        <input type="file" name="category_image" class="categoryImage">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create">
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/backend/assets/js/my-js/common.js') }}"></script>
    <script>
        $(document).ready(function() {
            filepondImage(document.querySelector('.categoryImage'));
        });
    </script>
@endpush
