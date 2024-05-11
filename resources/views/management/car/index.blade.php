@extends('management.layouts.master')
@section('title')
    Car - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Car</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ route('car.create') }}" type="button" class="btn btn-primary"> Add Car
                            </a>
                        </div>
                        <div class="body table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th class="col-lg-2">Image</th>
                                    <th class="col-lg-2">Vehicle</th>
                                    <th class="col-lg-2">Maker</th>
                                    <th class="col-lg-2">Model</th>
                                    <th class="col-lg-2">Status</th>
                                    <th class="col-lg-2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($cars)>0)
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>
                                            @foreach ($multi as $image)
                                                @if ($image[0]->reference_id == $car->id)
                                                    @if ($image[0]->image != null)
                                                        <img style=""
                                                             src="{{ asset('images/media/' . $image[0]->image) }}"
                                                             height="60px" width="60px">
                                                    @else
                                                        <img style="" src="{{ asset('images/galleryimage.png') }}"
                                                             height="60px" width="60px">
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$car->title ?? ''}}</td>
                                        <td>{{$car['makersName']->title ?? ''}}</td>
                                        <td>{{$car['modelsName']->title ?? ''}}</td>
                                        @if ($car->status == 1)
                                            <td><label class="badge badge-info" data-toggle="modal"
                                                       data-target="#active_inactive">Published</label>
                                            </td>
                                        @else
                                            <td><label class="badge badge-danger" data-toggle="modal"
                                                       data-target="#active_inactive">Draft</label>
                                            </td>
                                        @endif
                                        <td>
                                            @can('car-edit')
                                                <a class="btn bg-blue btn-circle"
                                                   href="{{ route('car.show', $car->id) }}">
                                                    <i class="material-icons" href="">edit</i>
                                                </a>
                                            @endcan
                                            @can('car-delete')

                                                <button type="button"
                                                        class="btn bg-red btn-circle waves-effect waves-circle waves-float"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $car->id }}">
                                                    <i class="material-icons"> delete </i>
                                                </button>
                                            @endcan
                                            <div class="modal fade" id="exampleModalCenter{{ $car->id }}"
                                                 tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure want to proceed this action?
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-danger waves-effect"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <form action="{{ route('car.destroy', $car->id) }}"
                                                                  method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                        class="btn btn-info waves-effect">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
