@props(['categories'])

<div class="col-md-4">
    @if(!empty($categories))
        @foreach($categories as $category)
           <div class="featured_category_article article {{ $loop->iteration < 1 ? '' : 'border-bottom' }}">
               <a href="#" style="text-decoration: none">
                    <span style="color: green">
                        <strong>{{ ucwords($category->name) }}</strong>
                    </span>
               </a>

               <br>

               <span style="font-family: 'Poppins', sans-serif; font-size:1vw;" class="blog_title">
                    <a href="/article/{{ $category->latestArticle->slug }}" style="text-decoration: none;color: black">
                        {{ $category->latestArticle->title }}
                    </a>
                    <br>
                </span>

               <x-article.author-name :author="$category->latestArticle->author">
                   {{ $category->latestArticle->author->name }}
               </x-article.author-name>

           </div>
        @endforeach
    @endif
</div>
