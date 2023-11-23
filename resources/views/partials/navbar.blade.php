{{-- navbar --}}
<nav class="top-0 left-0 z-40 relative px-4 py-4 flex justify-between items-center bg-hero dark:bg-slate-900">
    <a class="text-2xl md:text-3xl text-sky-700 font-bold leading-none hidden lg:block" href="/">
        D'<span class="relative inline-block px-2">
            <div class="absolute inset-0 transform -skew-x-12 bg-cyan-500"></div>
            <span class="relative text-white">Blogspot</span>
        </span>
    </a>

    <div class="lg:hidden ">
        <button class="navbar-burger text-cyan-500 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>

    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="{{ request()->is('/') ? 'active' : '' }} rounded-full py-2 px-5 text-sm text-gray-900 hover:bg-cyan-500 hover:text-white dark:text-white"
                href="/">Home</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        {{-- <li><a class="text-sm text-gray-900 hover:text-gray-500" href="/about">About</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li> --}}
        <li><a class="{{ request()->is('blog*') ? 'active' : '' }} rounded-full py-2 px-5 text-sm text-gray-900 hover:text-white hover:bg-cyan-500 dark:text-white"
                href="/blog">Blog✨</a></li>
        @auth
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-900 hover:text-gray-500" href="/dashboard">Dashboard</a></li>
        @endauth
        {{-- <li><a class="text-sm text-gray-900 hover:text-gray-500" href="/categories">Category</a></li> --}}
    </ul>
    @auth
        <form class="hidden lg:inline-block" action="/logout" method="post">
            @csrf
            <button
                class="hidden lg:inline-block py-2 px-6 bg-cyan-500  hover:bg-cyan-600 text-sm text-white rounded-full transition duration-200"
                type="submit">Logout</button>
        </form>
    @endauth

    @guest
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-cyan-500 hover:bg-cyan-600 text-sm text-white font-semibold rounded-full transition duration-200"
            href="/login">Sign In</a>
        {{-- <a class="hidden lg:inline-block py-2 px-6  bg-cyan-500  hover:bg-cyan-600 text-sm text-white rounded-full transition duration-200"
            href="/register">Sign up</a> --}}
    @endguest
    {{-- toggle darkmode --}}
    <label class="relative inline-flex items-center cursor-pointer">
        <span class="mr-3 text-yellow-300 dark:text-slate-900"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                <path
                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
            </svg></span>
        <input type="checkbox" value="" class="sr-only peer" id="dark-toggle">
        <div
            class="w-11 h-6 bg-yellow-300 peer-focus:outline-none peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-[18px] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[35px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-700">
        </div>
        <span class="ml-3 text-[#e6faf4] dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path
                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
            </svg></span>
    </label>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav
        class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-hero overflow-y-auto dark:bg-slate-900">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl text-sky-700 font-bold leading-none" href="/">
                D'<span class="relative inline-block px-2">
                    <div class="absolute inset-0 transform -skew-x-12 bg-cyan-500"></div>
                    <span class="relative text-white">Blogspot</span>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-cyan-500 cursor-pointer hover:text-cyan-600" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="{{ request()->is('/') ? 'active' : '' }} block p-4 text-sm font-semibold text-gray-900 hover:bg-cyan-600 hover:text-white rounded-full dark:text-white"
                        href="/">Home</a>
                </li>
                {{-- <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-gray-500 rounded"
                        href="#">About</a>
                </li> --}}
                <li class="mb-1">
                    <a class="{{ request()->is('blog') ? 'active' : '' }}  block p-4 text-sm font-semibold text-gray-900 hover:bg-cyan-600 hover:text-white rounded-full dark:text-white"
                        href="/blog">Blog✨</a>
                </li>
                @auth
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-gray-500 rounded dark:text-white"
                            href="/dashboard">Dashboard</a>
                    </li>
                @endauth
                {{-- <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-900 hover:bg-blue-50 hover:text-gray-500 rounded"
                        href="#">Category</a>
                </li> --}}
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button
                            class="block px-4 py-3 mb-2 w-full leading-loose text-xs text-center text-white bg-cyan-500 hover:bg-cyan-600  rounded-xl"
                            type="submit">Logout</button>
                    </form>
                @endauth
                @guest
                    <a class="block px-4 py-3 mb-2 leading-loose bg-white hover:bg-gray-100 text-xs text-center text-gray-900 font-semibold bg-gray-100 rounded-xl"
                        href="/login">Sign in</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white bg-cyan-500 hover:bg-cyan-600  rounded-xl"
                        href="/register">Sign Up</a>
                @endguest
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2023 D'Blogspot</span>
            </p>
        </div>
    </nav>
</div>
