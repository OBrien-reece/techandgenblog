@extends('layouts.app')

<x-webpage.title title="Create Article"/>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <form action="{{ route('article.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="text-center">
                        <h3>Create article</h3>
                    </div>

                    <div class="form-group">
                        <ul>
                            <li><label for="category">You may select a desired category for your article</label></li>
                            <li><label for="category">If the category of choice is non-existent, please refrain from creating an article</label></li>
                        </ul>
                        <select name="category_id" id="" class="form-control">
                            <option value="" selected>Select category from dropdown</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="title">Title for your article</label>
                        <input name="title" type="text" class="form-control" placeholder="insert the title for yout article">
                    </div>

                    <br>

                    <div class="form-group">
                        <ul>
                            <li><label for="excerpt">Article Exerpt</label></li>
                            <li><label for="excerpt">Some bit of information that would summarize the article <small>(max 150 words)</small></label></li>
                        </ul>
                        <textarea name="exerpt" id="" class="form-control" rows="5" placeholder="e.g Artificial intelligence (AI) is rapidly changing the way we live, work, and interact with the world around us. From virtual assistants like Siri and Alexa to self-driving cars and automated customer service systems, AI is becoming increasingly integrated into our daily lives."></textarea>
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="thumbnail">Article Thumbnail</label>
                                <input name="thumbnail" type="file" class="form-control">
                            </div>
                            <div class="col">
                                <label for="thumbnail">Article Banner Image</label>
                                <input name="banner" type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-group mb-4">
                        <ul>
                            <li><label for="article_body">Type out the article</label></li>
                            <li><label for="article_body">You can preview the article at the bottom as you type before submission</label></li>
                        </ul>
                        <textarea name=""article_body class="form-control" onkeyup="AutoGrowTextArea(this)" style="overflow:hidden">  </textarea>
                    </div>

                    <button type="submit" style="float: right" class="btn btn-success">Submit article</button>

                </form>
            </div>
        </div>
    </div>
@endsection
