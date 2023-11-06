@extends('back-end.layouts.master')
@section('title','Project')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Project List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{route("project.create")}}" class="btn btn-primary mb-2" style="float:right;">Add Project</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title">Project List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr class="" style="text-align:center; ">
                                    <th style="width: 7%">SL</th>
                                    <th style="width: 15%">Image</th>
                                    <th style="width: 25%">Title</th>
                                    <th style="width: 35%">Description</th>
                                    <th style="width: 8%">Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-project").addClass('active');
        });

    </script>
    <script>
        var datatable = $('.data-table').DataTable({
            order: [],
            lengthMenu: [[10, 20, 30, 50, 100, -1], [10, 20, 30, 50, 100, "All"]],
            processing: true,
            responsive: true,
            serverSide: true,
            language: {
                processing: '<i class="ace-icon fa fa-spinner fa-spin bigger-500" style="font-size:60px;"></i>'
            },
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",

            ajax: {
                url: "{{route('project.index')}}",
                type: "get",
            },

            columns: [
                {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false,},
                {data: 'image', name: 'image', orderable: true,},
                {data: 'title', name: 'title', orderable: true,},
                {data: 'description', name: 'description', orderable: true},
                {data: 'status', name: 'status', orderable: true},
                {data: 'action', searchable: false, orderable: false}

                //only those have manage_user permission will get access

            ],
        });
        function StatusChange(id) {
            event.preventDefault();
            swal({
                title: `Are you sure?`,
                text: "Change Status",
                buttons: true,
                dangerMode: true,
            }).then((statusChange) => {
                if (statusChange) {
                    statusChanges(id);
                }
            });
        };

        function statusChanges(id) {
            let status = $('#status-' + id).find(":selected").val()
            $.ajax({
                type:'GET',
                url:"{{ route('project-status-change') }}",
                data:{
                    id:id,
                    status:status
                },
                // success:function(data){
                //     toastr.success("Status Change successfully");
                // }
                success: function (data) {
                    console.log(data);
                    // Reloade DataTable
                    $('#table').DataTable().ajax.reload();
                    // show toast message
                    toastr.success("Status Change successfully");
                }, // success end
            });
        }

        // delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    deleteItem(id);
                }
            });
        };

        // Delete Button
        function deleteItem(id) {

            var url = '{{ route("project.destroy",":id") }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                success: function (resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function (error) {
                    location.reload();
                } // Error
            })
        }

    </script>
@endsection
