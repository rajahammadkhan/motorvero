@extends('management.layouts.master')
@section('title')
    Sell Car Log - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Sell Car Log</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="card">
                            <div class="body table-responsive">
                                <table class="table " id="myTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sellCarLogs as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value->type }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('sellCarlogs.id',$value->id) }}">Show</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>

{{--                            {!! $sellCarLogs->render() !!}--}}
                        </div>
                    </div>
                </div>
@endsection

