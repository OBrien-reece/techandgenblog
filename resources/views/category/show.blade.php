@extends('layouts.app')

<x-webpage.title title="{{ $category->name }}" />

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">

                <div style="padding-bottom: 20px;">
                    <span style="font-family: 'Poppins', sans-serif; font-size:2.7vw;">
                    {{ $category->name }}
                    </span>
                    <div>
                        <div class="col-md-8">
                            {{ $category->about }}
                        </div>
                    </div>
                </div>

                {{--Component of the lower section of the page--}}
                @foreach($articles as $article)
                    @if($loop->iteration % 5 == 0)
                        <h1>Advertisement goes here</h1>
                    @endif
                    <x-article.article-blog-lower-section :article="$article" />
                @endforeach

            </div>
        </div>
    </div>
@endsection
