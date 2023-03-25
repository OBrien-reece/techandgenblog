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
                            @forelse($notifications as $notification)
                                <x-admin.notification :notification="$notification" />
                            @empty
                                <p>No notifications have been registered</p>
                            @endforelse
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
