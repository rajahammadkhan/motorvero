@extends('management.layouts.master')
@section('title')
    Testimonial Create - {{config('app.dashboard')}}

@endsection
@section('content')

    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Testimonial</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input type="text" id="title"
                                                       class="form-control" name="title"
                                                       placeholder="Enter Title" value="{{old('title') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Description </strong></label>
                                            <textarea value="{{old('description') }}" type="text" name="description"
                                                      id="comment" class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Status</strong> </label>
                                            <select class="form-control select2" name="status" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option Selected  value=1>Publish
                                                </option>
                                                <option   value=0>draft
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-3"><strong>Media Gallery</strong></label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="user_profile" accept=".jpg,.gif,.png,.webp"
                                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                                    <div class="img-thumb">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-none  cloner" style="display:none;">
                    <div class="row wow-remove">
                        <div class="col">
                            <div class="main_container m-3">
                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                    <div class="select_img d-flex justify-content-center align-items-center">
                                        <div class="dz-message p-3 text-center">
                                            <h3>Click to upload.</h3>

                                        </div>
                                    </div>
                                    <input type="file" name="image"
                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                    <div class="img-thumb">
                                    </div>
                                </div>
                                <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                            </div>
                        </div>

                    </div>
                </div>
                <script>

                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#imageResult')
                                    .attr('src', e.target.result);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $(function () {
                        $('#upload').on('change', function () {
                            readURL(input);
                        });
                    });

                    /*  ==========================================
                        SHOW UPLOADED IMAGE NAME
                    * ========================================== */
                    var input = document.getElementById('upload');
                    var infoArea = document.getElementById('upload-label');

                    input.addEventListener('change', showFileName);

                    function showFileName(event) {
                        var input = event.srcElement;
                        var fileName = input.files[0].name;
                        infoArea.textContent = 'File name: ' + fileName;
                    }

                </script>
@endsection

