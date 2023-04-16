@props(['title'])

@section('title', $title . " | " . config('app.name'))
