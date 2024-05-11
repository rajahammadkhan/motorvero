@extends('management.layouts.master')
@section('title')
    Job - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Job</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ route('job.create') }}" type="button" class="btn btn-primary">Add Job</a>
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th class="col-lg-2">Title</th>
                                <th class="col-lg-2">Location</th>
                                <th class="col-lg-2">Category</th>
                                <th class="col-lg-4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($job)>0)
                            @foreach($job as $jobs)
                           
                                <tr>
                                    <td>{{ $jobs->title }}</td>
                                    <td>{{ $jobs['locationName']->title }}</td>
                                    <td>{{ $jobs->category }}</td>
                                    <td>
                                        @can('job-edit')
                                            <a class="btn bg-blue btn-circle"
                                               href="{{ route('job.show', $jobs->id) }}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        @endcan
                                        @can('job-delete')
                                            <button type="button"
                                                    class="btn bg-red btn-circle waves-effect waves-circle waves-float"
                                                    data-toggle="modal"
                                                    data-target="#exampleModalCenter{{ $jobs->id }}">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        @endcan
                                        <div class="modal fade" id="exampleModalCenter{{ $jobs->id }}"
                                             tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                                            Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to proceed with this action?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <form action="{{ route('job.destroy', $jobs->id) }}"
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
        </div>
    </div>
@endsection
