@extends('management.layouts.master')
@section('title')
    Users - {{config('app.dashboard')}}
@endsection


@section('content')




    <div class="card">
        <div class="header">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Users Management</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Account</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        @if($user->status == 1)
                            <td><label class="badge badge-info" data-toggle="modal"
                                       data-target="#active_inactive">Published</label>

                            </td>
                        @elseif($user->status == 2)
                            <td><label class="badge badge-info" data-toggle="modal"
                                       data-target="#active_inactive">Pending</label>

                            </td>
                        @elseif($user->status == 3)
                            <td><label class="badge badge-info" data-toggle="modal"
                                       data-target="#active_inactive">Approved</label>

                            </td>
                        @else
                            <td><label class="badge badge-danger" data-toggle="modal"
                                       data-target="#active_inactive">Draft</label>

                            </td>
                        @endif
                        <td>
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    {{--    {!! $data->render() !!}--}}
@endsection
