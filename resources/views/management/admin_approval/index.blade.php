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
                                    <th class="col-lg-2">Car Name</th>
                                    <th class="col-lg-2">Dealer Name</th>
                                    <th class="col-lg-2">Maker Name</th>
                                    <th class="col-lg-2">Model Name</th>
                                    <th class="col-lg-2">Status</th>
                                    <th class="col-lg-2">Approved</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($cars)>0)
                                @foreach($cars as $row)
                                    <tr>
                                        <td> {{$row->title ?? ''}}</td>
                                        <td> {{$row->User->name ?? ''}}</td>
                                        <td>{{$row['makersName']->title ?? ''}}</td>
                                        <td>{{$row['modelsName']->title ?? ''}}</td>
                                        @if($row->admin_status == 1)
                                            <td><label class="badge badge-info" data-toggle="modal"
                                                       data-target="#active_inactive">Approved</label>
                                            </td>
                                        @else
                                            <td><label class="badge badge-danger" data-toggle="modal"
                                                       data-target="#active_inactive">Pending</label>
                                            </td>
                                        @endif
                                        <td>
                                            @can('reviews-edit')
                                                <a class="btn bg-blue btn-circle"
                                                   href="{{ route('approval.show', $row->id) }}">
                                                    <i class="material-icons" href="">edit</i>
                                                </a>
                                            @endcan
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
                                                        <form action="{{url('approval_update',$row->id)}}"
                                                              method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="col-12 mt-3">
                                                                    <label for="email_address1"><strong>Deal
                                                                            Type</strong> </label>
                                                                    <select class="form-control select2"
                                                                            name="deal_type" id="Quiz-type"
                                                                            data-placeholder="Select" required>
                                                                        <option value="" disabled selected>Select Deal
                                                                            Type
                                                                        </option>

                                                                        <option {{ old('deal_type') == 'Great' ? 'Selected' : '' }} value="Great">Great
                                                                            Deal
                                                                        </option>
                                                                        <option {{ old('deal_type') == 'Fair' ? 'Selected' : '' }} value="Fair">Fair
                                                                            Deal
                                                                        </option>

                                                                        <option {{ old('deal_type') == 'Good' ? 'Selected' : '' }} value="Good">Good
                                                                            Deal
                                                                        </option>

                                                                        <option {{ old('deal_type') == 'High' ? 'Selected' : '' }} value="High">High
                                                                            Price
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                        class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit"
                                                                        class="btn btn-success waves-effect">
                                                                    Approve
                                                                </button>
                                                            </div>
                                                        </form>
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

