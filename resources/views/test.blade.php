<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- jumbotron --}}
    <section class="bg-gray-700 bg-center bg-no-repeat bg-blend-multiply"
        style="background-image: url('{{ asset('images/bg-jumbotron.jpg') }}'); width: 100%; height: 100%;">

        <div class="max-w-screen-xl px-4 py-24 mx-auto text-center lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">We
                invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-white rounded-lg hover:text-gray-900 sm:ms-4 hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    {{-- end jumbotron --}}

    <div class="container">
        <div class="flex items-center justify-center w-full">
            <div class="block pt-4 text-center">
                <h1 class="pt-4 text-2xl font-bold text-orange-600">Ini Halaman Home Dari Learning Laravel 11</h1>
                <h1> Created by: {{ $nama }}</h1>
            </div>
        </div>
    </div>

    <div class="mt-96">

    </div>
    <script>
        alert("Welcome to Laravel")
    </script>
</x-layout>
