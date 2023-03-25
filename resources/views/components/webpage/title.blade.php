@props(['title'])

@section('title', config('app.name') . " | " . $title)
