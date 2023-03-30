@extends('layouts.app')

<x-webpage.title title="{{ $the_author->name }}" />

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="row">
                    <div class="col-md-7">
                        <span style="font-family: 'Poppins', sans-serif; font-size:4.4vw;">
                            {{ $the_author->name }}
                        </span>
                    </div>
                    <div class="col-md-3">
                        <img class="author_picture" src="https://picsum.photos/seed/{{$the_author->id}}/270/150" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3 m-auto">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dignissimos
                ipsa maiores nemo nobis, odio sed! Ab accusantium ad aliquam architecto asperiores
                corporis cum doloremque dolores ex id illum in, ipsam iusto laboriosam laudantium
                non optio porro possimus praesentium, quo recusandae tenetur unde veniam voluptatem
                voluptatum. Culpa delectus, ducimus hic id ipsa ipsam labore laudantium libero
                molestias perferendis quae quas qui quos, repellat repudiandae rerum voluptates.
                Blanditiis, consequatur enim explicabo illo neque nisi omnis totam. Accusantium
                animi enim error inventore itaque magnam nam sapiente tenetur! A commodi cum, excepturi
                hic laborum maxime nisi, non nulla pariatur quisquam ratione voluptatibus voluptatum?
                <br><br>
                <div>
                    <span>Reach {{ $the_author->name }} through her twitter @twitter</span>
                </div>
            </div>

            <div class="row">
               <div class="col-md-9 m-auto">
                   <div class="mt-4">
                        <span style="font-family: 'Poppins', sans-serif; font-size:1.4vw;">
                            The Latest from {{ $the_author->name }}
                        </span>
                   </div>

                   @foreach($the_author->articles as $article)
                       <x-article.article-blog-lower-section :article="$article" />
                   @endforeach
               </div>
            </div>
        </div>
    </div>
@endsection
