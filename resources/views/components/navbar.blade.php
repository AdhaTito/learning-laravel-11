    {{-- navbar --}}
    <nav class="fixed w-full bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/laravel.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-orange-600">Adha Tito</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="{{ request()->is('/') ? 'text-orange-600 md:p-0' : 'text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} block px-3 py-2 ">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="{{ request()->is('about') ? 'text-orange-600 md:p-0' : 'text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} block px-3 py-2 ">About</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="{{ request()->is('contact') ? 'text-orange-600 md:p-0' : 'text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} block px-3 py-2 ">Contact</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="{{ request()->is('blog') ? 'text-orange-600 md:p-0' : 'text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} block px-3 py-2 ">Blog</a>
                    </li>
                    <li>
                        <a href="/document" target="_blank"
                            class="{{ request()->is('document') ? 'text-orange-600 md:p-0' : 'text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }} block px-3 py-2 ">Document</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- navbar end --}}
