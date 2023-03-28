@extends('layouts.app')

<x-webpage.title title="Tech and general news"/>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="jumbotron jumbotron-fluid">
                <div class="container border-bottom">
                    <div class="row">
                        <div class="col md-4 border-end">
                            <h1 class="display-6" style="font-family: 'Times New Roman'">Tech and Gen</h1>
                            <p class="lead">
                                <small><span><i>Two arrays walk into a bar...</i></span></small>
                            </p>
                        </div>
                        <div class="col md-4">
                            <span style="font-family: 'Times New Roman';font-size: 17px">Bringing you the latest tech news on the internet</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-9 m-auto">
            <div class="row">
                <div class="col-md-8">

                <span style="font-family: 'Poppins', sans-serif; font-size:2.3vw;" class="blog_title">
                    {{ $featured_article->title }}
                </span>
                <img src="img/card.jpg" alt="" width="100%" style="border-radius: 2px">

                </div>
                <div class="col-md-4">
                    @if(!empty($categories))
                        @foreach($categories as $category)
                            <span style="color: green">
                                <strong>{{ ucwords($category->name) }}</strong>
                            </span>
                            <br>
                            <span style="font-family: 'Poppins', sans-serif; font-size:1vw;" class="blog_title">
                                {{ $latestArticle->title }}<br>
                            </span>
                            <span style="color: gray;font-size: 1.1vw">{{ $latestArticle->author->name }}</span>
                            <hr>
                        @endforeach
                    @endif
                </div>
            </div>
    </div>
</div>

@endsection
