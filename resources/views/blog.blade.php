<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="pt-24 ml-20">
            <h1 class="pt-4 text-5xl font-extrabold text-orange-500">
                Artikel Ku
            </h1>
            {{-- Looping --}}
            @foreach ($posts as $post)
                <hr class="my-8 border-t-2 border-gray-300 ">
                <div class="mb-10 w-2xl">
                    <a href="/blog/{{ $post['slug'] }}">
                        <h1 class="text-4xl font-bold">{{ $post['title'] }}</h1>
                    </a>
                    <h2 class="mt-2 text-xl font-extralight">{{ $post['author'] }} |
                        {{ $post->create_at }}</h2>
                    <p class="mt-4 mb-4 font-normal text-justify">{{ Str::limit($post['blog'], '200') }}</p>
                    <a href="/blog/{{ $post['slug'] }}"
                        class="font-medium border-b-2 border-orange-400 cursor-pointer active:font-light active:border-b ">Read
                        More
                    </a>
                </div>
            @endforeach
            {{-- end Looping --}}
        </div>
    </div>
</x-layout>
