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
                            <div class="form-group col-md-12">
                                <label for="">Page Header Image</label><span style="font-weight: bold; color: red"> *</span>
                                <input name="image" type="file" class="form-control">
                                <input type="hidden" name="old_image" id="" value="@if($site_infos) {{$site_infos->image}} @endif">
                                @if($site_infos)
                                    @if ($site_infos->image)
                                        <img src="{{ asset($site_infos->image) }}" alt="" class="img-fluid rounded img-thumbnail mt-2" style="width: 50%; height: 300px">
                                    @endif
                                @endif
                            </div>

                            <u><h4 class="text-center mb-3 underline">Create Home Section Name</h4></u>

                            <div class="row px-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Service/Provide Top title</label>
                                        <input type="text" class="form-control" id="exampleInputTitle" name="provide_top_title" required value="@if($site_infos) {{ $site_infos->provide_top_title }}  @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Service/Provide title</label>
                                        <input type="text" class="form-control" id="exampleInputTitle" name="provide_title" required value="@if($site_infos) {{ $site_infos->provide_title }}  @endif">
                                    </div>
                                </div>
                            </div>
                                <div class="row px-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">About Us Top title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="about_top_title" required value="@if($site_infos) {{ $site_infos->about_top_title }}  @endif">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">About Us title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="about_title" required value="@if($site_infos) {{ $site_infos->about_title }}  @endif">
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Project Top title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="project_top_title" required value="@if($site_infos) {{ $site_infos->project_top_title }}  @endif">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Project Us title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="project_title" required value="@if($site_infos) {{ $site_infos->project_title }}  @endif">
                                        </div>
                                    </div>
                                </div>


                                <div class="row px-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Customer Top title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="customer_top_title" required value="@if($site_infos) {{ $site_infos->customer_top_title }}  @endif">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Customer title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="customer_title" required value="@if($site_infos) {{ $site_infos->customer_title }}  @endif">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group px-4">
                                    <label for="exampleInputTitle">Hire Us</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="hire" required value="@if($site_infos) {{ $site_infos->hire }}  @endif">
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
            $("#side-settings").addClass('active');
            $("#side-general").addClass('active');
            $("#side-general").addClass('active-sidebar');
        });
    </script>
@endsection
