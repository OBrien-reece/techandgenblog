@props(['featured_article'])

<span style="font-family: 'Poppins', sans-serif; font-size:2.3vw;">
    {{ $featured_article->title }}
</span>
<img src="{{ asset('img/card.jpg' /*'article_thumbnails/' . $featured_article->thumbnail_image*/) }}" alt="" width="100%" style="border-radius: 2px">
