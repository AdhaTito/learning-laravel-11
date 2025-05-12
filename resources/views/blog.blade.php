<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="px-24 pt-24">
        <h1 class="pt-4 mb-12 text-5xl font-extrabold text-center text-orange-500">
            Artikel Ku
        </h1>
        <hr class="my-8 border-t-2 border-orange-400/25 ">
        <div class="grid grid-cols-2 gap-x-16 gap-y-12">
            @foreach ($blogs as $blog)
                <div class="w-full">
                    <a href="/blog/{{ $blog['slug'] }}">
                        <h1 class="text-3xl font-bold">{{ $blog['title'] }}</h1>
                    </a>
                    <div class="mt-2 mr-4 text-xl">
                        <a href="/author/{{ $blog->author->name }}"
                            class="mt-2 text-lg font-normal hover:underline">{{ $blog->author->name }}</a>
                        <a>
                            | kategori |
                        </a>
                        <a class="font-semibold text-slate-700">
                            {{ $blog->created_at->diffForHumans() }}
                        </a>
                    </div>
                    <p class="mt-4 mb-4 font-normal text-justify">{{ Str::limit($blog['blog'], 300) }}</p>
                    <a href="/blog/{{ $blog['slug'] }}"
                        class="font-medium border-b-2 border-orange-400 cursor-pointer active:font-light active:border-b">Read
                        More</a>
                    <hr class="my-8 border-t-2 border-gray-300 ">
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
