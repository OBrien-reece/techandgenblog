@extends('components.admin.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-3">
                    <div class="card-header">
                        <span class="card-title">Notifications received</span>
                    </div>
                    <div class="card-body">

                        @can('admin')
                            @foreach($notifications as $notification)
                                <a href="" style="color: purple">
                                    <div class="circle">
                                        <p class="circle-inner">{{ $initials = preg_filter('/[^A-Z]/', '', $notification->data['name']) }}</p>
                                    </div>
                                        <span style="font-family: 'Times New Roman'">{{ $notification->data['name'] }} is requesting writer priviledges</span>
                                        <small style="font-size: 12px;float: right"> [{{ ($notification->created_at)->diffForHumans() }}]</small>
                                    </a>
                                <hr>
                            @endforeach
                        @endcan

                        {{--@foreach($users as $user)
                            <div class="circle">
                                <p class="circle-inner">{{ $initials = preg_filter('/[^A-Z]/', '', $user->name) }}</p>
                            </div>
                            <hr>
                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
