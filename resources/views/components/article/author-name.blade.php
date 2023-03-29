@props(['author'])

<a href="/author/{{ Str::snake($author->name, '-') }}" class="author_name_link">
    <strong><span class="author_name">{{ $slot }}</span></strong>
</a>
