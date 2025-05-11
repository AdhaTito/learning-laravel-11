<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="ml-10">
            <h1 class="pt-4 mx-10 text-5xl font-extrabold text-orange-500">
                Artikel Ku
            </h1>
            <hr class="mx-10 my-8 border-t-2 border-gray-300">
            <div class="flex mx-10 mt-10">
                <div class="block mb-10 w-2xl">
                    <h1 class="text-4xl font-bold">{{ $getpost['title'] }}</h1>
                    <h2 class="mt-2 text-2xl font-extralight">{{ $getpost['author'] }}</h2>
                    <p class="mt-4 mb-4 font-normal text-justify">{{ $getpost['blog'] }}</p>
                    <a href="/blog"
                        class="font-medium border-b-2 border-orange-400 cursor-pointer active:font-light active:border-b ">Back
                        to...
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
