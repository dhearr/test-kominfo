<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D'Blogspot | {{ $title }}</title>
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('/img/avatar.jpg') }}">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Alpine -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/skilline.css" />
    <!-- Roboto font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&display=swap"
        rel="stylesheet">
    {{-- darkmode --}}
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    {{-- tailwindcss --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased dark:bg-slate-800">
    <!-- navbar -->
    @include('partials.navbar')

    <div class="bg-hero dark:bg-gradient-to-b from-slate-900 to-slate-800">
        @yield('container')
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-30 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path class="dark:text-slate-800"
                    d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-12 dark:bg-slate-800">

            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden dark:bg-slate-800">
        @yield('body')
    </div>

    <!-- footer -->
    <footer
        class="relative flex flex-col items-center bg-hero dark:bg-gradient-to-t from-slate-900 to-slate-800 overflow-hidden py-16">
        <div class="md:w-2/3 w-full z-30 px-4 text-white flex flex-col">
            <div class="w-full text-7xl font-bold">
                <h1 class="w-full text-sky-900 md:w-2/3"><span class="text-cyan-500">Just</span> not easy doesn't mean
                    <span class="text-cyan-500">impossible.</span>
                </h1>
            </div>
            <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                <p class="w-full md:w-2/3 text-gray-900 dark:text-white">Hallo guys mohon dukungan nya untuk bisa
                    membangun website blog
                    ini dengan cara kalian menulis di blog ini, terimaksih...😛</p>
            </div>
            <div class="flex flex-col">
                <div class="flex mt-24 mb-12 flex-row justify-between">
                    <div class="">
                        <a class="text-xl md:text-1xl text-sky-700 font-bold leading-none" href="#">
                            D'<span class="relative inline-block px-2">
                                <div class="absolute inset-0 transform -skew-x-12 bg-cyan-500"></div>
                                <span class="relative text-white">Blogspot</span>
                            </span>
                        </a>
                    </div>
                    <a href="/"
                        class="hidden md:block cursor-pointer text-gray-900 hover:text-gray-500 uppercase dark:text-white">Home</a>
                    <a href="/blog"
                        class="hidden md:block cursor-pointer text-gray-900 hover:text-gray-500 uppercase dark:text-white">Blog</a>
                    @auth
                        <a href="/blog"
                            class="hidden md:block cursor-pointer text-gray-900 hover:text-gray-500 uppercase dark:text-white">Dashboard</a>
                    @endauth
                </div>
                <hr class="border-gray-900 dark:border-white" />
                <p class="w-full text-center my-12 text-gray-900 dark:text-gray-400">Copyright © 2023 D'Blogspot</p>
            </div>
        </div>

        <div aria-hidden="true" class="z-20 absolute h-full mb-0 inset-0 flex items-center">
            <div aria-hidden="true"
                class="bg-layers bg-scale w-56 h-56 m-auto blur-xl bg-gradient-to-r from-cyan-500 via-blue-500 to-sky-700 rounded-full md:w-[30rem] md:h-[30rem] md:blur-3xl">
            </div>
        </div>
        <div aria-hidden="true"
            class="z-20 absolute inset-0 w-full h-full bg-[#e6faf4] dark:bg-gradient-to-b from-slate-800 to-slate-900 opacity-80">
        </div>
    </footer>

    <!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
