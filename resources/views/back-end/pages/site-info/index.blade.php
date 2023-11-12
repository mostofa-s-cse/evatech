@extends('back-end.layouts.master')
@section('title','SiteInfo')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">SiteInfo</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">SiteInfo</li>
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
                            <h3 class="card-title">Create SiteInfo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('site-info.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">First Name</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="first_name" required value="@if($site_infos) {{ $site_infos->first_name }}  @endif">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="last_name" required value="@if($site_infos) {{ $site_infos->last_name }}  @endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Email</label>
                                    <input type="email" class="form-control" id="exampleInputTitle" name="email" required value="@if($site_infos) {{ $site_infos->email }}  @endif">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="phone" required value="@if($site_infos) {{ $site_infos->phone }}  @endif">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Address ..." name="address" required>@if($site_infos) {{$site_infos->address}} @endif</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
{{--                                <button type="submit" class="btn btn-default float-right">Cancel</button>--}}
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
            $("#side-siteinfo").addClass('active');
        });
    </script>
@endsection