@props(['categories'])

<div class="col-md-4">
    @if(!empty($categories))
        @foreach($categories as $category)
            <a href="#" style="text-decoration: none">
            <span style="color: green">
                <strong>{{ ucwords($category->name) }}</strong>
            </span>
            </a>
            <br>
            <span style="font-family: 'Poppins', sans-serif; font-size:1vw;" class="blog_title">
                <a href="#" style="text-decoration: none;color: black">
                    {{ $category->latestArticle->title }}
                </a>
                <br>
            </span>
            <a href="#" style="text-decoration: none;">
                <span style="color: gray;font-size: 1.1vw">{{ $category->latestArticle->author->name }}</span>
            </a>
            <hr>
        @endforeach
    @endif
</div>
