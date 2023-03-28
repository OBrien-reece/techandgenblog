@props(['articles'])

<div class="row">
    <div class="col-md-9 m-auto">

        <div>
                <span style="font-family: 'Poppins', sans-serif; font-size:1.4vw;">
                    The Latest
                </span>
        </div>
        <br>

        @foreach($articles as $article)

            <div class="row border-bottom border-top article" style="padding: 10px 0 10px 0">
                <div class="col-md-4">
                    <span style="color: green">{{ $article->category->name }}</span><br>
                    <span style="font-family: 'Poppins', sans-serif; font-size:1.4vw;">{{ $article->title }}</span>
                    <br>
                    <a href="#" class="author_name_link">
                        <strong><span class="author_name">{{ $article->author->name }}</span></strong>
                    </a>
                    <br>
                    <span class="article_created_at">{{ date('F jS Y \a\t h:i A', strtotime($article->created_at)) }}</span>
                </div>

                <div class="col-md-4">
                    <span style="color: gray">{!! Str::of(\Stevebauman\Purify\Facades\Purify::clean($article->body))->limit(200) !!}</span>
                </div>

                <div class="col-md-4">
                    <img src="https://picsum.photos/seed/{{$article->id}}/270/150" alt="">
                </div>
            </div>
        @endforeach
    </div>
</div>
