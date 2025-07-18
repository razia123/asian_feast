@extends('backend.master')
@section('title', 'Food Type')

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Food Type</h1>
        <div class="ms-md-1 ms-0">
            <a href="{{ route('food_type.create') }}" class="btn btn-primary">Add Food Type</a>
        </div>
    </div>
    <div class="table-responsive mt-5">
        <table class="table text-nowrap">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Food Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
@endsection
