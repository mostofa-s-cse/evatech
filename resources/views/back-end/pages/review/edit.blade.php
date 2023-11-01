@extends('back-end.layouts.master')
@section('title','Review Update')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Review Update</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Review Update</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
            <!-- ./col -->
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route("review.update",$reviews->id)}}" id="doctorForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" value="{{$reviews->title}}" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                                <div class="col-sm-9">
                                    <textarea name="sub_title" class="form-control" id="sub_title" cols="30" rows="5">{{$reviews->sub_title}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{$reviews->name}}" id="name" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="designation" class="col-sm-3 col-form-label">Designation</label>
                                <div class="col-sm-9">
                                    <input type="text" name="designation" class="form-control" value="{{$reviews->designation}}" id="designation" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
@endsection
