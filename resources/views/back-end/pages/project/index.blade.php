@extends('back-end.layouts.master')
@section('title','Project')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Project</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Project</a></li>
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
                        <span class="float-center">Project List</span>
                        <a href="{{route("project.create")}}" class="btn btn-primary float-right mr-3">Add Project</a>
                    </h2>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="datatable" style="overflow: auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th>Title</th> --}}
                                <th>Project Title</th>
                                <th>Project Sub Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td class="text-wrap">{{ $project->project_title }}</td>
                                <td class="text-wrap">{{ $project->project_sub_title }}</td>
                                <td class="text-wrap">
                                    @if($project->project_image)
                                    <img src="{{ asset('storage/images/'.$project->project_image) }}" style="height: 50px;width:100px;">
                                    @else 
                                    <span>No image found!</span>
                                    @endif
                                </td>
                                <td class="d-flex ">
                                    <a href="{{route("project.edit",$project->id)}}"  role="button" class="btn btn-sm btn-outline-success mr-1 editbtn"><i class="fa-solid fa-pen-to-square"></i>Update</a>
                                    <a href="{{route("project.delete",$project->id)}}" id="" role="button" class="btn btn-sm btn-outline-danger deletebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
            $(function() {
                $('#status').change(function() {
                    let status = $(this).prop('checked') == true ? 1 : 0;
                    let id = $(this).data('id');
                    $.ajax({
                        type: 'GET',
                        dataType: "json",
                        url: '/baby',
                        data: {
                            'status': status,
                            'id': id
                        },
                        success: function(data) {
                            console.log('Success');
                        }
                    })
                })
            })
        });
    </script>
@endsection
