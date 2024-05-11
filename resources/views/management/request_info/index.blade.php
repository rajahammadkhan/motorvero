@extends('management.layouts.master')
@section('title')
    Request Information
@endsection
@section('content')

    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Request Information</h4>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <div class="body table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th class="col-lg-3">Name</th>
                                    <th class="col-lg-3">Car Name</th>
                                    <th class="col-lg-3">Dealer Name</th>
                                    <th class="col-lg-3">Email</th>
                                    <th class="col-lg-3">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($data)>0)
                                @foreach($data as $row)
                                    <tr>
                                        <td>
                                            <a href="{{route('request-info.show',$row->id)}}">

                                                {{$row->first_name.' '.$row->last_name}}
                                            </a>
                                        </td>
                                        <td> {{$row->CarName->title}}</td>
                                        <td> {{$row->DealerName->name}}</td>
                                        <td> {{$row->email}}</td>
                                        <td>

                                            @can('request-info-delete')
                                                <button type="button"
                                                        class="btn bg-red btn-circle waves-effect waves-circle waves-float"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{$row->id}}">
                                                    <i class="material-icons"> delete </i>
                                                </button>
                                            @endcan


                                            <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                            <form action="{{route('request-info.destroy',$row->id)}}"
                                                                  method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-info waves-effect">
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

