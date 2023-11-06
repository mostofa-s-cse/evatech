@extends('back-end.layouts.master')
@section('title','Create Contact')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Contact</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">contact</li>
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
                            <h3 class="card-title">Create Project</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">name</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">email</label>
                                    <input type="email" class="form-control" id="exampleInputTitle" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">subject</label>
                                    <input type="subject" class="form-control" id="exampleInputTitle" name="subject">
                                </div>
                                <div class="form-group">
                                    <label>message</label>
                                    <textarea class="form-control" rows="3" placeholder="description ..." name="message"></textarea>
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
            $("#side-project").addClass('active');
        });

    </script>
@endsection
