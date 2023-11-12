@extends('back-end.layouts.master')
@section('title','About')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">About</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <style>
        .tox-notifications-container{
            display: none; !important;
        }
        .tox .tox-statusbar__text-container {
            display: none;
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-12">
                    <a href="{{route("customer.create")}}" class="btn btn-primary mb-2" style="float:right;">Add Customer</a>
                </div> --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title">Create About Us</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="create_form" action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Title</label><span style="font-weight: bold; color: red"> *</span>
                                        <textarea name="title" id="" class="form-control tinymce-editor" cols="30" rows="10">@if($abouts) {!! $abouts->title !!}  @endif</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">About Us Description</label><span style="font-weight: bold; color: red"> *</span>
                                        <textarea name="description" id="" class="form-control tinymce-editor" cols="30" rows="10">@if($abouts) {!!$abouts->description !!} @endif</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">About Us Image</label><span style="font-weight: bold; color: red"> *</span>
                                        <input name="image" type="file" class="form-control">
                                        <input type="hidden" name="old_image" id="" value="@if($abouts) {{$abouts->image}}@endif">
                                        @if($abouts)
                                        @if ($abouts->image)
                                            <img src="{{ asset($abouts->image) }}" alt="" class="img-fluid rounded img-thumbnail mt-2" style="width: 50%; height: 300px">
                                        @endif
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">About Us Mission</label><span style="font-weight: bold; color: red"> *</span>
                                        <textarea name="mission" id="" class="form-control tinymce-editor" cols="30" rows="10">@if($abouts) {!!$abouts->mission !!} @endif</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">About Us Vision</label><span style="font-weight: bold; color: red"> *</span>
                                        <textarea name="vision" id="" class="form-control tinymce-editor" cols="30" rows="10">@if($abouts) {!!$abouts->vision!!} @endif</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button onclick="confirm(`Are You Sure ?`)"
                                                class="btn btn-sm btn-primary">SAVE
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-about").addClass('active');
        });

    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $().ready(function () {
            $("#create_form").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    mission: {
                        required: true,
                    },
                    vision: {
                        required: true,
                    },
                },
            });

        })


        tinymce.init({
            selector: '.tinymce-editor',
            height: 300,
        });
    </script>
@endsection
