@extends('management.layouts.master')
@section('title')
    Press Release Edit - {{config('app.dashboard')}}
@endsection
@section('content')
    <style>

        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */
        body {
            min-height: 100vh;
            /*background-color: #757f9a;*/
            /*background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);*/
        }

        /*
</style>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Press Release</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('press_release.update',$pressRoom->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if(Auth::user()->hasRole('Admin'))
                        <input type="hidden" name="admin_status" value="1">
                    @else
                        <input type="hidden" name="admin_status" value="0">
                    @endif
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{$pressRoom->title}}" type="text" id="erp_question_text"
                                                       class="form-control" name="title"
                                                       placeholder="Title" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Short Description </strong></label>
                                            <textarea type="text" name="short_description"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10">

                                                {{$pressRoom->short_description}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Long Description </strong></label>
                                            <textarea type="text" name="long_description"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10">

                                                {{$pressRoom->long_description}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Title </strong></label>

                                            <div class="form-line">
                                                <input value="{{$pressRoom->seo()->meta_title ?? ''}}" type="text" id="erp_question_text"
                                                       class="form-control" name="meta_title"
                                                       placeholder="Meta Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Description </strong></label>
                                            <textarea type="text"
                                                      name="meta_description"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10">
                                                {{$pressRoom->seo()->meta_description ?? ''}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Keywords </strong></label>
                                            <div class="form-line">
                                                <input value="{{$pressRoom->seo()->meta_keywords ?? ''}}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="meta_keywords"
                                                       placeholder="Meta Keywords">
                                            </div>
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
                                            <button class="btn btn-primary float-right"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Status </strong></label>
                                            <select class="form-control select2" name="status" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option value="" disabled>Select</option>
                                                <option {{$pressRoom->status == '1' ? 'selected' : ''}}   value=1>
                                                    Publish
                                                </option>
                                                <option {{$pressRoom->status == '0' ? 'selected' : ''}}  value=0>draft
                                                </option>

                                            </select>
                                        </div>
                                    </div>
{{--                                    <div class="row my-1">--}}
{{--                                        <div class=" col-12">--}}
{{--                                            <label for="email_address1"><strong>Type </strong></label>--}}
{{--                                            <select class="form-control select2" name="type" id="Quiz-type"--}}
{{--                                                    data-placeholder="Select">--}}
{{--                                                <option value="" disabled>Select</option>--}}
{{--                                                <option {{$blog->type == "1" ? 'selected' : ''}}   value="1">--}}
{{--                                                    New--}}
{{--                                                </option>--}}
{{--                                                <option {{$blog->type == '2' ? 'selected' : ''}}  value="used">Used--}}
{{--                                                </option>--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="row my-1">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Select Category </strong></label>
                                            <select class="form-control select2" name="category" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option value="" disabled>Select</option>
                                                <option {{$pressRoom->category == "1" ? 'selected' : ''}}   value="1">
                                                    Press Release
                                                </option>
                                                <option {{$pressRoom->category == '2' ? 'selected' : ''}}  value="2">Press Coverage
                                                </option>
                                                <option {{$pressRoom->category == '3' ? 'selected' : ''}}  value="3">Insights
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-3"><strong>Media Gallery</strong></label>
                                    <div class="row image-box">
                                        <div class="col">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="image" accept=".jpg,.gif,.png,.webp"
                                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                                    <div class="img-thumb">
                                                        @if($pressRoom->media()->image == null)
                                                        @else
                                                            <img class="main_img d-block w-100 h-100 position-absolute"
                                                                 src="{{asset('images/media'.'/'.$pressRoom->media()->image)}}"
                                                                 alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                @if($pressRoom->media()->image == null)

                                                @else
                                                    <a class="btn mt-3 remove_lol fw-normal border-0 shadow-none"
                                                       data-id="{{$pressRoom->media()->id}}">Remove</a>
                                                @endif

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

