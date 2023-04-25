@props(['article'])

            <div class="row border-bottom border-top article" style="padding: 10px 0 10px 0">
                <div class="col-md-4">
                    <a href="/category/{{ $article->category->slug }}" style="text-decoration: none">
                        <span style="color: green">
                            <strong>{{ ucwords($article->category->name) }}</strong>
                        </span>
                    </a>

                    <br>

                    <a href="/article/{{ $article->slug }}" style="font-family: 'Poppins', sans-serif; font-size:1.4vw;color: black;text-decoration: none">
                        <span>{{ $article->title }}</span>
                    </a>

                    <br>

                    <x-article.author-name :author="$article->author">
                            {{ $article->author->name }}
                        </x-article.author-name>

                    <br>

                    <span class="article_created_at">{{ date('F jS Y \a\t h:i A', strtotime($article->created_at)) }}</span>
                </div>

                <div class="col-md-4">
                    <a href="/article/{{ $article->slug }}" style="color: gray;text-decoration: none">
                        <span>{!! Str::of(\Stevebauman\Purify\Facades\Purify::clean($article->body))->limit(200) !!}</span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/article/{{ $article->slug }}">
                        <img style="border-radius: 10px" width="100%" height="140px" src="{{ asset('article_thumbnails/' . $article->thumbnail_image) }}" alt="Article Image Thumbnail">
                    </a>
                </div>
            </div>
