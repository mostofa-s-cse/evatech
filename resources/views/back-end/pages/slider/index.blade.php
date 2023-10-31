@extends('back-end.layouts.master')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Slider</a></li>
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
                        <span class="float-center">Slider List</span>
                        <a href="{{route("slider.create")}}" class="btn btn-primary float-right mr-3">Add Slider</a>
                    </h2>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="datatable" style="overflow: auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td class="text-wrap">{{ $slider->title }}</td>
                                <td class="text-wrap">{{ $slider->sub_title }}</td>
                                <td class="text-wrap">
                                    @if($slider->image)
                                    <img src="{{ asset('storage/images/'.$slider->image) }}" style="height: 50px;width:100px;">
                                    @else 
                                    <span>No image found!</span>
                                    @endif
                                </td>
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
