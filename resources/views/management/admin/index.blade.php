@extends('management.layouts.master')
@section('title')
    Approvals - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Pending Approval </h4>
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
                                    <th class="col-lg-2">email</th>
                                    <th class="col-lg-2">Maker Name</th>
                                    <th class="col-lg-2">Model Name</th>
                                    <th class="col-lg-2">Status</th>
                                    <th class="col-lg-2">Approved</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cars as $row)
                                    <tr>

                                        <td> {{$row->email ?? ''}}</td>
                                        <td> {{$row->make ?? ''}}</td>
                                        <td> {{$row->model ?? ''}}</td>
                                        @if(Auth::user()->hasRole('Admin') == 0)
                                            <td><label class="badge badge-info" data-toggle="modal"
                                                       data-target="#active_inactive">Approved</label>
                                            </td>
                                        @else
                                            <td><label class="badge badge-danger" data-toggle="modal"
                                                       data-target="#active_inactive">Pending</label>
                                            </td>
                                        @endif
                                        <td>
                                            @can('reviews-approved')
                                                <button type="button"
                                                        class="btn bg-success btn-circle waves-effect waves-circle waves-float"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{$row->id}}">
                                                    <i class="material-icons text-white" id="tick-mark"> check </i>
                                                </button>
                                            @endcan


                                            <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                Approved
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
                                                            <form action="{{route('admin.update',$row->id)}}"
                                                                  method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit" class="btn btn-info waves-effect">
                                                                    Approve
                                                                </button>
                                                                <button type="submit" class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

