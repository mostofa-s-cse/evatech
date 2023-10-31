@extends('back-end.layouts.master')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Provide Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Provide Create</a></li>
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
                    <form class="form-horizontal" action="{{route("provide.create")}}" id="doctorForm" method="POST" enctype="multipart/form-data">
                        @csrf
                            
                            <div class="form-group row">
                                <label for="provide_title" class="col-sm-3 col-form-label">Provide Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="project_title" placeholder="Provide title here" name="provide_title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="provide_sub_title" class="col-sm-3 col-form-label">Project Sub Title</label>
                                <div class="col-sm-9">
                                    <textarea name="provide_sub_title" class="form-control" id="provide_sub_title" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="provide_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="provide_image" @error('provide_image') is-invalid @enderror>
                                </div>
                                @error('provide_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
@endsection