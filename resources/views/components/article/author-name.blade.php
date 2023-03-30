@props(['author'])

<a href="/author/{{ $author->id }}" class="author_name_link">
    <strong><span class="author_name">{{ $slot }}</span></strong>
</a>
