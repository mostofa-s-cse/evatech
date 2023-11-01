@extends('back-end.layouts.master')
@section('title','Update Review')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update Review</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Review</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Review Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('review.update', $reviews->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{$reviews->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSubtitle">Sub Title</label>
                                    <input type="text" class="form-control" id="exampleInputSubtitle" name="sub_title" value="{{$reviews->sub_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name" value="{{$reviews->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <textarea class="form-control" rows="3" placeholder="designation ..." name="designation">{{$reviews->designation}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{$reviews->image}}">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-reviews").addClass('active');
        });

    </script>
@endsection
