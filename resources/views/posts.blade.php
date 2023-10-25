<x-layout>
    <php @include('post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-post-feature-card :post="$posts[0]" />

            @if ($posts->count() > 1)
                <div class="lg:grid lg:grid-cols-2">
                    @foreach ($posts->skip(1) as $post)
                        <x-post-card :post="$post" class="bg-red-500"/>
                    @endforeach
                </div>
            @endif

        @else
            <p>No posts yet. Please check back later.</p>
        @endif

    </main>
</x-layout>




