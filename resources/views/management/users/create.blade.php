@extends('management.layouts.master')
@section('title')
    Add User - {{config('app.dashboard')}}
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>


{{--    @if (count($errors) > 0)--}}
{{--        <div class="alert alert-danger">--}}
{{--            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}


    <div class="card">
        <div class="header">
            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <strong> Account Status </strong>
                        <select class="form-control" name="status">
                            <option  value="1">Publish
                            </option>
                            <option selected value="2">Pending
                            </option>
                            <option  value="3">Approved
                            </option>
                            <option value="0">Draft
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dealer Type:</strong>
                        <select name="dealer_type" class="form-control" required>
                            <option value="" selected disabled>Select Dealer Type</option>
                            <option value="4">Basic Dealer</option>
                            <option value="3">Standard Dealer</option>
                            <option value="2">Premium Dealer</option>
                            <option value="1">VIP Dealer</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection
