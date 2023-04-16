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

                <div class="col-md-9 col-xm-9 col-sm-9 col-lg-9 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>{{ $article->author->name }}</strong>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ date('F jS Y', strtotime($article->created_at)) }}</strong>
                        </div>
                    </div>
                </div>


                <img src="{{ asset('img/card.jpg') }}" alt="" width="100%" style="border-radius: 4px">

                <div class="mt-4">
                    {!! \Stevebauman\Purify\Facades\Purify::clean($article->body) !!}
                </div>

            </div>
        </div>
    </div>
@endsection

