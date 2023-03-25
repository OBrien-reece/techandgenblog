@props(['notification'])

<a href="" style="color: purple" >
    {{--<div class="circle">
        <p class="circle-inner">{{ $initials = preg_filter('/[^A-Z]/', '', $notification->data['name']) }}</p>
    </div>--}}
    <span style="font-family: 'Times New Roman'">{{ $notification->data['name'] }} is requesting writer priviledges</span>
    <small style="font-size: 12px;float: right">
        [{{ ($notification->created_at)->diffForHumans() }}]
    </small>
</a>
<span style="float: right;padding-right: 70px">
    <i style="color: green" class="fas fa-circle-check"></i>
    <a href="notification/{{ $notification->id }}"><i style="color: red" class="fa fa-circle-xmark"></i></a>
</span>
<hr>
