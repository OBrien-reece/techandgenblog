@props(['notification'])

<span style="font-family: 'Times New Roman';color: purple">{{ $notification->data['name'] }} is requesting writer priviledges</span>
<small style="font-size: 12px;float: right">
    [{{ ($notification->created_at)->diffForHumans() }}]
</small>

<br>

<div style="padding-left: 28px;color: black">
    <small>
        <u><span>#About</span></u>
        <br>
        <span style="font-family: 'Times New Roman'">{{ $notification->data['about'] }} is requesting writer priviledges</span>
    </small>
</div>

<div class="mt-3 row">
    <div class="col-md-3 mb-2">
        <button class="btn btn-success" type="submit">Accept Request</button>
    </div>
    <div class="col-md-3">
        <form action="notification/{{ $notification->id }}" method="GET">
            <button class="btn btn-danger" type="submit">Reject Request</button>
        </form>
    </div>
</div>
<hr>
