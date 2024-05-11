@extends('frontend.layouts.master')
@section('title')
    Chat
@endsection
@section('content')
    <style>
        .chatbox ul li {
            display: flex;
            align-items: center;
        }

        .chatbox ul a {
            text-decoration: none;
        }

        .chatbox ul li img {
            width: 30px;
            height: 30px;
        }

        .chatbox p {
            background: linear-gradient(90deg, #007bff 0%, #01c5fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 16px;
            margin-bottom: 0;
            padding-left: 5px;
            font-weight: 600;
        }

        .chat-header {
            background: linear-gradient(90deg, #e8f3ff 0%, #6fc9e3 100%);
        }
    </style>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Chat</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div>
                            <div class="row justify-content-center">
                                @if(auth()->user()->is_admin == true)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header chat-header">
                                                Users
                                            </div>
                                            <div class="card-body chatbox p-0">
                                                <ul class="list-group list-group-flush">
                                                    @foreach($users as $user)
                                                        @php
                                                            $not_seen = \App\Models\Message::where('user_id', $user->id)->where('receiver', auth()->id())->where('is_seen', false)->get() ?? null
                                                        @endphp
                                                        <a href="{{ route('inbox.show', $user->id) }}" class="text-dark link">
                                                            <li class="list-group-item" wire:click="getUser({{ $user->id }})" id="user_{{ $user->id }}">
                                                                <img class="img-fluid avatar" src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png">
                                                                @if($user->is_online) <i class="fa fa-circle text-success online-icon"></i>
                                                                @endif <p> {{ $user->name }}</p>
                                                                @if(filled($not_seen))
                                                                    <div class="badge badge-success rounded">{{ $not_seen->count() }}</div>
                                                                @endif
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header chat-header">
                                            {{ $sender->name }}
                                        </div>
                                        <div class="card-body message-box"
{{--                                             wire:poll.10ms="mountComponent()"--}}
                                        >
                                            @if(filled($messages))
                                                @foreach($messages as $message)
                                                    {{--                        @dd($messages);--}}
                                                    <div class="single-message @if($message->user_id !== auth()->id()) received @else sent @endif">
                                                        <p class="font-weight-bolder my-0">{{ $message->user->name }}</p>
                                                        <p class="my-0">{{ $message->message }}</p>
                                                        @if (isPhoto($message->file))
                                                            <div class="w-100 my-2">
                                                                <img class="img-fluid rounded" loading="lazy" style="height: 250px" src="{{ $message->file }}">
                                                            </div>
                                                        @elseif (isVideo($message->file))
                                                            <div class="w-100 my-2">
                                                                <video style="height: 250px" class="img-fluid rounded" controls>
                                                                    <source src="{{ $message->file }}">
                                                                </video>
                                                            </div>
                                                        @elseif ($message->file)
                                                            <div class="w-100 my-2">
                                                                <a href="{{ $message->file}}" class="bg-light p-2 rounded-pill" target="_blank" download><i class="fa fa-download"></i>
                                                                    {{ $message->file_name }}
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <small class="text-muted w-100">Sent <em>{{ $message->created_at }}</em></small>
                                                    </div>
                                                @endforeach
                                            @else
                                                No messages to show
                                            @endif
                                        </div>
                                        <div class="card-footer">
                                            <form wire:submit.prevent="SendMessage" enctype="multipart/form-data">
                                                <div wire:loading wire:target='SendMessage'>
                                                    Sending message . . .
                                                </div>
                                                <div wire:loading wire:target="file">
                                                    Uploading file . . .
                                                </div>
                                                @if($file)
                                                    <div class="mb-2">
                                                        You have an uploaded file <button type="button" wire:click="resetFile" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Remove {{ $file->getClientOriginalName() }}</button>
                                                    </div>
                                                @else
                                                    No file is uploaded.
                                                @endif
                                                <div class="row">

                                                    @if(empty($file))
                                                        <div class="col-md-1 pe-0">
                                                            <button type="button" class="border h-100 w-100" id="file-area">
                                                                <label>
                                                                    <i class="fa fa-file-upload"></i>
                                                                    <input class="d-none" type="file" id="chatfile" wire:model="file">
                                                                    <label for="chatfile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                                                                        </svg></label>
                                                                </label>
                                                            </button>
                                                        </div>
                                                    @endif
                                                    <div class="col-md-8">
                                                        <input wire:model="message" class="form-control input shadow-none w-100 d-inline-block" placeholder="Type a message" @if(!$file) required @endif>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button class="btn btn-primary d-inline-block w-100"><i class="far fa-paper-plane"></i> Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
