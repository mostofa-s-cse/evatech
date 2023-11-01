@extends('back-end.layouts.master')
@section('title','Review')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Review</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Review</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        
        <!-- ./col -->
        <div class="col-sm-12">
            <div class="card">
                <div class="mt-3 text-center">
                    <h2>
                        <span class="float-center">Review List</span>
                        <a href="{{route("review.create")}}" class="btn btn-primary float-right mr-3">Add Review</a>
                    </h2>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="datatable" style="overflow: auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($reviews as $review)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td class="text-wrap">{{ $review->title }}</td>
                                <td class="text-wrap">{{ $review->sub_title }}</td>
                                <td class="text-wrap">{{ $review->name }}</td>
                                <td class="text-wrap">{{ $review->designation }}</td>
                                <td class="d-flex ">
                                    <a href=""  role="button" class="btn btn-sm btn-outline-success mr-1 editbtn"><i class="fa-solid fa-pen-to-square"></i>Update</a>
                                    <a href="" id="" role="button" class="btn btn-sm btn-outline-danger deletebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection
