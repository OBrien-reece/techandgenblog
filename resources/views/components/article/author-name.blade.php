@props(['author'])

<a href="/author/{{ $author->slug }}" class="author_name_link">
    <strong><span class="author_name">{{ $slot }}</span></strong>
</a>
