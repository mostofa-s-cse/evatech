@extends('back-end.layouts.master')
@section('title','Project update')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Project Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Project Update</a></li>
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
                    <form class="form-horizontal" action="{{route("project.update",$projects->id)}}" id="doctorForm" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="project_title" class="col-sm-3 col-form-label">Project Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="project_title" value="{{$projects->project_title}}" name="project_title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_sub_title" class="col-sm-3 col-form-label">Project Sub Title</label>
                                <div class="col-sm-9">
                                    <textarea name="project_sub_title" class="form-control" id="project_sub_title" cols="30" rows="5">{{$projects->project_sub_title}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="project_image" @error('project_image') is-invalid @enderror>
                                    @if($projects->project_image)
                                    <img src="{{ asset('storage/images/'.$projects->project_image) }}" style="height: 50px;width:100px; margin-top:5px;">
                                @else 
                                    <span>No image found!</span>
                                @endif 
                                </div>
                                @error('project_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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