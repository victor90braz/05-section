<x-layout>
    <div class="container" style="max-width: 800px; margin: 10px auto; padding: 20px; background-color: #f5f5f5;">
        <nav>
            <ul style="list-style: none;">
                <li style="font-weight: bold; color: #007bff;">
                    By <a href="/authors/{{ $post->author->username }}"> {{$post->author->name}} </a> in <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                     </a>
                </li>
            </ul>
        </nav>

        <article style="margin-top: 20px; padding: 10px; background-color: #fff;">
            <h1 style="font-size: 24px; margin-bottom: 10px;">{{ $post->title }}</h1>
            <div>{!! $post->body !!}</div>
        </article>
        <a href="/" class="btn-go-back" style="display: inline-block; margin-top: 20px; text-decoration: underline; color: #007bff;">Go Back</a>
    </div>
</x-layout>
