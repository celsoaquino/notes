<header class="bg-white rounded-xl">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <img class="h-8 w-auto" src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
        </div>
        <p class="text-sm font-semibold leading-6 text-gray-900">A simple <span
                class="text-amber-700">Laravel</span>
            project!</p>
        <div class="flex justify-center items-center lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900 mr-4">{{ session('user.username') }}</a>
            <a href="{{ route('logout') }}"
               class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Logout
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"/>
                </svg>
            </a>
        </div>
    </nav>
</header>
