@extends('back-end.layouts.master')
@section('title','Create Slider')
@section('content-header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Create Slider</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            @if ($errors->any())
                <div style="width: 20%">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--            <section class="loading">--}}
            {{--                <div class="loading-content">--}}
            {{--                    <i class="fa fa-spinner fa-spin"></i>--}}
            {{--                </div>--}}
            {{--            </section>--}}
            <div class="row px-4">
                <div class="col-md-12 ima">
                    <form id="create_form" action="{{route('sliders.store')}}" method="post">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="">Sub Title</label><span style="font-weight: bold; color: red"> *</span>
                            <input type="text" name="sub_title" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Title</label><span style="font-weight: bold; color: red"> *</span>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Image</label><span style="font-weight: bold; color: red"> *</span>
                            <input type="hidden" name="image" id="image">
                            <div id="dropzoneForm" class="dropzone">
                            </div>
                        </div>
                        <div class="form-group col-md-12 " style="margin-top: 10px">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script>
        $(document).ready(function () {
            $("#side-slide").addClass('active');
            $("#side-banner-slide").addClass('active');
            $("#side-banner-slide").addClass('active-sidebar');

            $("#create_form").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    sub_title: {
                        required: true,
                    },
                    image: {
                        required: true,
                    },
                },
            });
        });
    </script>
    <script type="text/javascript">

        Dropzone.options.dropzoneForm = {
            url: "no-path",
            autoProcessQueue: false,
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            addRemoveLinks: true,
            parallelUploads: 1,
            maxFilesize: 5,
            maxFiles: 1,
            init: function () {
                this.on("addedfile", (file) => {
                    if (this.files[1] != null) {
                        this.removeFile(this.files[0]);
                    } else {
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = event => {
                            $('#image').val(event.target.result)
                        }
                    }
                });

                this.on('removedfile', function (file) {
                    $('#image').val(' ');
                });

            },

        };

    </script>
@endsection
