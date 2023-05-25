@extends('layouts.app')

<x-webpage.title title="{{ $article->title }}" />

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                 <span style="color: green">
                        <strong>{{ ucwords($article->category->name) }}</strong>
                 </span>

                <br>

                <span style="font-family: 'Poppins', sans-serif; font-size:2.3vw;">
                    {{ $article->title }}
                </span>

                <div class="mt-3 mb-3">
                    <span><strong>{{ $article->author->name }}</strong></span>
                    <span style="float: right"><strong>{{ date('F jS Y', strtotime($article->created_at)) }}</strong></span>
                </div>

                <img
                    {{--src="{{ asset('article_banner/' . $article->banner_image) }}"--}}
                    src="https://picsum.photos/200/100"
                    alt=""
                    width="100%"
                    style="border-radius: 4px">

                <div class="mt-4">
                    {!! \Stevebauman\Purify\Facades\Purify::clean($article->body) !!}
                </div>

            </div>
        </div>
    </div>
@endsection

