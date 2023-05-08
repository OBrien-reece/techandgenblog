@extends('layouts.app')

<x-webpage.title title="Create Article"/>

@push('styles')
    <!-- include summernote css/js-->
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush

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

                        @if($errors->has('title'))
                        <div class='danger'>{{ $errors->first('title') }}</div
                        @endif
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
                        <textarea name="article_body" id="summernote" class="form-control" onkeyup="AutoGrowTextArea(this)" style="overflow:hidden">  </textarea>
                    </div>

                    <button type="submit" style="float: right" class="btn btn-success">Submit article</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento', 'Times New Roman'],
            fontNamesIgnoreCheck: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento', 'Times New Roman'],
            toolbar: [
                ['style', ['style']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
