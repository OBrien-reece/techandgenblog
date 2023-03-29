@extends('layouts.app')

<x-webpage.title title="Tech and general news"/>

@section('content')

<div class="container">

    <x-webpage.header />
    <div class="col-md-9 m-auto">
        <div class="row">

            <div class="col-md-8">
            {{--Featured Article component Left side of the page--}}
            <x-article.featured-article :featured_article="$featured_article"/>
            </div>

            {{--Featured categry latest articles Right Side of the bed--}}
            <x-article.featured-article-categories :categories="$categories" />

        </div>
    </div>

    {{--Component of the lower section of the page--}}
    <x-article.article-blog-lower-section :articles="$articles" />

</div>

@endsection
