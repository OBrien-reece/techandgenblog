@extends('layouts.app')

<x-webpage.title title="Tech and general news"/>

@section('content')

<div class="container">

    {{--Component to show the webpage header--}}
    <x-webpage.header />
    <div class="col-md-9 m-auto">
        <div class="row">

            <div class="col-md-8">
            {{--Featured Article component Top Left side of the page--}}
                <a href="/article/{{ $featured_article->slug }}" style="text-decoration: none;color: black">
                    <x-article.featured-article :featured_article="$featured_article"/>
                </a>
            </div>

            {{--Featured categry latest articles Top Right Side of the bed--}}
            <x-article.featured-article-categories :categories="$categories" />

        </div>
    </div>

    <div class="row">
        <div class="col-md-9 m-auto">

            <div class="mt-4">
                <span style="font-family: 'Poppins', sans-serif; font-size:1.4vw;">
                    The Latest
                </span>
            </div>
            <br>

            {{--Component of the lower section of the page--}}
            @foreach($articles as $article)
                <x-article.article-blog-lower-section :article="$article" />
            @endforeach
        </div>
    </div>

</div>


@endsection
