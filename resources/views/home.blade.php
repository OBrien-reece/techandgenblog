@extends('layouts.app')

<x-webpage.title title="Tech and general news"/>

@section('content')

<div class="container">

    <x-webpage.header />

    <div class="col-md-9 m-auto">
        <div class="row">
            <div class="col-md-8">

            {{--Featured Article component--}}
            <x-article.featured-article :featured_article="$featured_article"/>
            </div>

            {{--Featured categry latest articles--}}
            <x-article.featured-article-categories :categories="$categories" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 m-auto">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <span style="color: green">{{ $article->category->name }}</span><br>
                        {{ $article->title }}
                    </div>
                    <div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, reiciendis.</div>
                    <div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, reiciendis.</div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
