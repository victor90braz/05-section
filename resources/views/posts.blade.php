<x-layout>
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; border: 2px solid #ccc; padding: 20px;">
        @foreach ($posts as $post)
            <div class="grid-item" style="border: 1px solid #ccc; padding: 10px;">
                <article>
                    <h1 style="font-weight: bold; color: #231713; text-decoration: underline;">
                        <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #333;">
                            {{$post->title}}
                        </a>
                    </h1>

                    <div>
                        By <a href="/authors/{{ $post->author->username }}"> {{$post->author->name}} </a> in <a href="/categories/{{ $post->category->slug }}">
                            {{ $post->category->name }}
                         </a>
                    </div>

                    <div>
                        {!! $post->excerpt !!}
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</x-layout>
