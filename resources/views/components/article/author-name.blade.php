@props(['author'])

<a href="/author/{{ $author->slug }}" class="author_name_link">
    <small>
        <span style="font-family: sans-serif;font-weight: bold" class="author_name">{{ $slot }}</span>
    </small>
</a>
