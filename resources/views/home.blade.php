@extends('layouts.main')

{{-- konten --}}
@section('container')
    <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
        <!--Left Col-->
        <div
            class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-4 md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-sky-700">
                <span class="text-cyan-500">Dhea Ramdai <span
                        class="hidden text-transparent w-1.5 h-14 bg-gradient-to-b from-cyan-500 to-sky-700 sm:inline-block">|</span>
                </span> <br class="inline-block sm:hidden">Web Dev and Graphic Design
            </h1>
            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                class="leading-normal text-gray-900 dark:text-white text-2xl mb-8">
                Saya sedang mengembangkan Website Blog dan Website Portfolio saya sendiri
            </p>
            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
                class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                <a href="https://wa.me/0895613983943?text=Mari%20bekerja%20sama" target="_blank"><button
                        class="lg:mx-0 bg-cyan-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        Contact Me
                    </button></a>
                <div
                    class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    <a href="https://github.com/dhearr" target="_blank"><button
                            class="bg-white w-14 h-14 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                height="30" viewBox="0 0 30 30">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </button></a>
                    <span class="cursor-pointer text-gray-900 dark:text-white">My Github</span>
                </div>
            </div>
        </div>
        <!--Right Col-->
        <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="img/dhea1.png" />
            <!-- instagram -->
            <a href="https://www.instagram.com/dherrrrrrrrrrrr/" target="_blank">
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                    class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/instagram.svg" />
                </div>
            </a>

            @guest
                <p class="absolute hidden lg:block right-2 top-20 text-sky-900 dark:text-cyan-500 text-xs rotate-6"><span
                        class="absolute right-32 bottom-6 -rotate-[25deg]"><svg xmlns="http://www.w3.org/2000/svg"
                            width="33" height="25" viewBox="0 0 33 25" fill="none">
                            <g clip-path="url(#clip0_5_4)">
                                <path
                                    d="M3.31287 20.7074C13.1332 18.4305 21.8125 14.6685 29.3129 7.62655M29.3129 7.62655C26.891 6.86945 24.4251 5.86325 22.159 4.70735M29.3129 7.62655C28.6209 11.8616 27.6319 14.9337 25.7285 18.7612"
                                    stroke="#0284c7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_5_4">
                                    <rect width="24" height="32" fill="white"
                                        transform="matrix(0 -1 1 0 0.312866 24.7074)" />
                                </clipPath>
                            </defs>
                        </svg></span>Login/Registrasi dulu yu, dan buat blog kalian 😜</p>
            @endguest

            <!-- facebook -->
            <a href="https://web.facebook.com/dhea.provider" target="_blank">
                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
                    class="absolute top-24 -right-4 sm:right-12 sm:top-32 md:top-40 md:right-28 lg:top-36 lg:right-16 floating">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/facebook.svg" alt="" />
                </div>
            </a>
            <!-- status -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
                <img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="img/status.svg" alt="" />
            </div>
            <!-- linkedin -->
            <a href="https://www.linkedin.com/in/dhea-ramdani-4b251124b" target="_blank">
                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true"
                    class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/linkedin.svg" alt="" />
                </div>
            </a>
        </div>
    </div>
@endsection

@section('body')
    <!-- tech -->
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center mt-5 mb-12 text-gray-400 font-medium">
            This website was created with technology
        </h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 justify-items-center">
            <img data-aos="fade-up" class="h-16 mb-5" src="img/php.png" />
            <img data-aos="fade-up" data-aos-delay="150" class="h-16 mb-5" src="img/laravel.png" />
            <img data-aos="fade-up" data-aos-delay="150" class="h-16" src="img/tailwind.png" />
            <img data-aos="fade-up" data-aos-delay="150" class="h-16" src="img/sql.png" />
        </div>
    </div>

    <!-- My Experience -->
    <div data-aos="fade-right" class="max-w-xl mx-auto mt-24">
        <h1 class="font-bold text-cyan-500 text-center mb-12 my-3 text-3xl">
            My<span class="text-sky-700">Experience.</span>
        </h1>
        <ol class="relative border-l border-gray-200 dark:border-gray-700">
            <li class="mb-10 ml-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </span>
                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Graphic Design<span
                        class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-3">Latest</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">PT. Atrahdis
                    Idea
                    Nusantara (Mei 2023 - Agustus 2023)</time>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Membuat Design Social Media</p>
            </li>
            <li class="mb-10 ml-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Junior Web Developer</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Pelatihan Web
                    Developer (Maret 2023 - Mei 2023)</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pelatihan dan sertifikasi BNSP sebagai
                    Junior Web Developer</p>
            </li>
            <li class="ml-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Admin</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">AHS Hardea (2022
                    - 2023)</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Mengelola penjuallan dan mengelola barang
                    masuk dan keluar setiap harinya.</p>
            </li>
        </ol>
    </div>
    <!-- card -->
    <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-24">
        <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl dark:bg-slate-700">
            <div style="background: #5b72ee"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 64 64">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #5b97c4;
                            }

                            .cls-2 {
                                fill: #8cbce7;
                            }

                            .cls-3 {
                                fill: #f79341;
                            }

                            .cls-4 {
                                fill: #ffb248;
                            }

                            .cls-5 {
                                fill: none;
                                stroke: #000;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 2px;
                            }

                            .cls-6 {
                                fill: #2b2b4c;
                            }

                            .cls-7 {
                                fill: #8d8d8d;
                            }
                        </style>
                    </defs>
                    <title>Education Insurance</title>
                    <g id="Education_Insurance" data-name="Education Insurance">
                        <path class="cls-1"
                            d="M53,34a1.43,1.43,0,0,1-1,1.35L42,38.81,30.79,42.7a5.31,5.31,0,0,1-3.52,0L16.84,39.09A15,15,0,0,0,36.9,26.71l2.41.94c.08.17.17.33.26.49a11.64,11.64,0,0,0,.92,1.4,12.05,12.05,0,0,0,2.17,2.23A12.43,12.43,0,0,0,47,34a12.21,12.21,0,0,0,3.84-1.85l1.25.49A1.44,1.44,0,0,1,53,34Z" />
                        <path class="cls-2"
                            d="M36.9,26.71A15,15,0,0,1,16.84,39.09L16,38.8,6,35.33a1.43,1.43,0,0,1-.06-2.69l2.63-1L27,24.38a5.4,5.4,0,0,1,4,0Z" />
                        <path class="cls-1" d="M42,38.81V49L29,53,16,49V38.8l11.27,3.9a5.31,5.31,0,0,0,3.52,0Z" />
                        <path class="cls-3"
                            d="M56,13.56v8.58a11.8,11.8,0,0,1-.12,1.69A12.37,12.37,0,0,1,47,34a12.43,12.43,0,0,1-4.34-2.23,12.05,12.05,0,0,1-2.17-2.23,11.64,11.64,0,0,1-.92-1.4c-.09-.16-.18-.32-.26-.49A10.8,10.8,0,0,1,38.63,26a8.86,8.86,0,0,1-.31-1.12A11.81,11.81,0,0,1,38,22.14V13.56l3.5-1,2.5-.71L47,11l1.13.32,6.42,1.83.76.22.2.05Z" />
                        <path class="cls-4"
                            d="M53,12.71v6.43A12.34,12.34,0,0,1,44,31a12.39,12.39,0,0,1-3.77-1.8A12.31,12.31,0,0,1,38,22.14V13.56L47,11Z" />
                        <path class="cls-5" d="M56,22.14V23a2.82,2.82,0,0,1-.12.83A11.8,11.8,0,0,0,56,22.14Z" />
                        <path class="cls-6"
                            d="M29,44a6.21,6.21,0,0,1-2.09-.36L5.64,36.28a2.44,2.44,0,0,1-.1-4.57l10.21-4a1,1,0,0,1,.73,1.86l-10.2,4A.44.44,0,0,0,6,34a.43.43,0,0,0,.3.4l21.3,7.37a4.35,4.35,0,0,0,2.85,0l21.26-7.38A.42.42,0,0,0,52,34a.44.44,0,0,0-.28-.41L51,33.28A13.22,13.22,0,0,1,47.27,35a1,1,0,0,1-.54,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93,1.62,1.62,0,0,0-.1-.18l-8-3.13a4.5,4.5,0,0,0-3.25,0l-7.16,2.81a1,1,0,1,1-.73-1.86l7.16-2.81a6.49,6.49,0,0,1,4.71,0l8.34,3.27a1,1,0,0,1,.54.5c.07.15.15.28.22.42a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,1,1,0,0,1,1-.12l1.25.49a2.43,2.43,0,0,1-.08,4.56L31.12,43.64A6.08,6.08,0,0,1,29,44Z" />
                        <path class="cls-6"
                            d="M29,54a.92.92,0,0,1-.29,0l-13-4A1,1,0,0,1,15,49V38.8a1,1,0,0,1,.42-.81,1,1,0,0,1,.91-.14l11.27,3.9a4.35,4.35,0,0,0,2.85,0l11.22-3.89a1,1,0,0,1,.91.13,1,1,0,0,1,.42.81V49a1,1,0,0,1-.71,1l-4.14,1.27a1,1,0,0,1-.58-1.92L41,48.26v-8l-9.88,3.43a6.31,6.31,0,0,1-4.18,0L17,40.2v8.06L29,52l4.76-1.46a1,1,0,1,1,.58,1.92L29.29,54A.92.92,0,0,1,29,54Z" />
                        <path class="cls-7"
                            d="M46,48a1,1,0,0,1-1-1V37.75L28.72,33A1,1,0,0,1,29.28,31l17,5A1,1,0,0,1,47,37V47A1,1,0,0,1,46,48Z" />
                        <path class="cls-6"
                            d="M46,26a1,1,0,0,1-.71-.29l-2.5-2.5a1,1,0,0,1,1.42-1.42L46,23.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,46,26Z" />
                        <path class="cls-6"
                            d="M47,35a.84.84,0,0,1-.27,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93c-.1-.18-.2-.36-.28-.54a10.92,10.92,0,0,1-.73-1.78,10.41,10.41,0,0,1-.34-1.21A13,13,0,0,1,37,22.14V13.56a1,1,0,0,1,.73-1l9-2.56a1,1,0,0,1,.54,0l9,2.56a1,1,0,0,1,.73,1V15a1,1,0,0,1-2,0v-.68L47,12l-8,2.27v7.83a11.11,11.11,0,0,0,.29,2.51,7.85,7.85,0,0,0,.28,1,11.2,11.2,0,0,0,.63,1.53c.08.17.16.3.23.44a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,11.36,11.36,0,0,0,4.64-7.65A11.2,11.2,0,0,0,55,22.14V19a1,1,0,0,1,2,0v3.14A12.22,12.22,0,0,1,56.87,24a13.35,13.35,0,0,1-5.45,9,13,13,0,0,1-4.15,2A.84.84,0,0,1,47,35Z" />
                    </g>
                </svg>
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-sky-700">
                SMPN 5 Ciamis
            </h1>
            <p class="px-4 text-gray-500 dark:text-white">
                Ilmu Pengetahuan Social
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="150"
            class="bg-white shadow-xl p-6 text-center rounded-xl dark:bg-slate-700">
            <div style="background: #f48c06"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 64 64">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #5b97c4;
                            }

                            .cls-2 {
                                fill: #8cbce7;
                            }

                            .cls-3 {
                                fill: #f79341;
                            }

                            .cls-4 {
                                fill: #ffb248;
                            }

                            .cls-5 {
                                fill: none;
                                stroke: #000;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 2px;
                            }

                            .cls-6 {
                                fill: #2b2b4c;
                            }

                            .cls-7 {
                                fill: #8d8d8d;
                            }
                        </style>
                    </defs>
                    <title>Education Insurance</title>
                    <g id="Education_Insurance" data-name="Education Insurance">
                        <path class="cls-1"
                            d="M53,34a1.43,1.43,0,0,1-1,1.35L42,38.81,30.79,42.7a5.31,5.31,0,0,1-3.52,0L16.84,39.09A15,15,0,0,0,36.9,26.71l2.41.94c.08.17.17.33.26.49a11.64,11.64,0,0,0,.92,1.4,12.05,12.05,0,0,0,2.17,2.23A12.43,12.43,0,0,0,47,34a12.21,12.21,0,0,0,3.84-1.85l1.25.49A1.44,1.44,0,0,1,53,34Z" />
                        <path class="cls-2"
                            d="M36.9,26.71A15,15,0,0,1,16.84,39.09L16,38.8,6,35.33a1.43,1.43,0,0,1-.06-2.69l2.63-1L27,24.38a5.4,5.4,0,0,1,4,0Z" />
                        <path class="cls-1" d="M42,38.81V49L29,53,16,49V38.8l11.27,3.9a5.31,5.31,0,0,0,3.52,0Z" />
                        <path class="cls-3"
                            d="M56,13.56v8.58a11.8,11.8,0,0,1-.12,1.69A12.37,12.37,0,0,1,47,34a12.43,12.43,0,0,1-4.34-2.23,12.05,12.05,0,0,1-2.17-2.23,11.64,11.64,0,0,1-.92-1.4c-.09-.16-.18-.32-.26-.49A10.8,10.8,0,0,1,38.63,26a8.86,8.86,0,0,1-.31-1.12A11.81,11.81,0,0,1,38,22.14V13.56l3.5-1,2.5-.71L47,11l1.13.32,6.42,1.83.76.22.2.05Z" />
                        <path class="cls-4"
                            d="M53,12.71v6.43A12.34,12.34,0,0,1,44,31a12.39,12.39,0,0,1-3.77-1.8A12.31,12.31,0,0,1,38,22.14V13.56L47,11Z" />
                        <path class="cls-5" d="M56,22.14V23a2.82,2.82,0,0,1-.12.83A11.8,11.8,0,0,0,56,22.14Z" />
                        <path class="cls-6"
                            d="M29,44a6.21,6.21,0,0,1-2.09-.36L5.64,36.28a2.44,2.44,0,0,1-.1-4.57l10.21-4a1,1,0,0,1,.73,1.86l-10.2,4A.44.44,0,0,0,6,34a.43.43,0,0,0,.3.4l21.3,7.37a4.35,4.35,0,0,0,2.85,0l21.26-7.38A.42.42,0,0,0,52,34a.44.44,0,0,0-.28-.41L51,33.28A13.22,13.22,0,0,1,47.27,35a1,1,0,0,1-.54,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93,1.62,1.62,0,0,0-.1-.18l-8-3.13a4.5,4.5,0,0,0-3.25,0l-7.16,2.81a1,1,0,1,1-.73-1.86l7.16-2.81a6.49,6.49,0,0,1,4.71,0l8.34,3.27a1,1,0,0,1,.54.5c.07.15.15.28.22.42a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,1,1,0,0,1,1-.12l1.25.49a2.43,2.43,0,0,1-.08,4.56L31.12,43.64A6.08,6.08,0,0,1,29,44Z" />
                        <path class="cls-6"
                            d="M29,54a.92.92,0,0,1-.29,0l-13-4A1,1,0,0,1,15,49V38.8a1,1,0,0,1,.42-.81,1,1,0,0,1,.91-.14l11.27,3.9a4.35,4.35,0,0,0,2.85,0l11.22-3.89a1,1,0,0,1,.91.13,1,1,0,0,1,.42.81V49a1,1,0,0,1-.71,1l-4.14,1.27a1,1,0,0,1-.58-1.92L41,48.26v-8l-9.88,3.43a6.31,6.31,0,0,1-4.18,0L17,40.2v8.06L29,52l4.76-1.46a1,1,0,1,1,.58,1.92L29.29,54A.92.92,0,0,1,29,54Z" />
                        <path class="cls-7"
                            d="M46,48a1,1,0,0,1-1-1V37.75L28.72,33A1,1,0,0,1,29.28,31l17,5A1,1,0,0,1,47,37V47A1,1,0,0,1,46,48Z" />
                        <path class="cls-6"
                            d="M46,26a1,1,0,0,1-.71-.29l-2.5-2.5a1,1,0,0,1,1.42-1.42L46,23.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,46,26Z" />
                        <path class="cls-6"
                            d="M47,35a.84.84,0,0,1-.27,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93c-.1-.18-.2-.36-.28-.54a10.92,10.92,0,0,1-.73-1.78,10.41,10.41,0,0,1-.34-1.21A13,13,0,0,1,37,22.14V13.56a1,1,0,0,1,.73-1l9-2.56a1,1,0,0,1,.54,0l9,2.56a1,1,0,0,1,.73,1V15a1,1,0,0,1-2,0v-.68L47,12l-8,2.27v7.83a11.11,11.11,0,0,0,.29,2.51,7.85,7.85,0,0,0,.28,1,11.2,11.2,0,0,0,.63,1.53c.08.17.16.3.23.44a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,11.36,11.36,0,0,0,4.64-7.65A11.2,11.2,0,0,0,55,22.14V19a1,1,0,0,1,2,0v3.14A12.22,12.22,0,0,1,56.87,24a13.35,13.35,0,0,1-5.45,9,13,13,0,0,1-4.15,2A.84.84,0,0,1,47,35Z" />
                    </g>
                </svg>
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-sky-700">
                SMAN 1 Ciamis
            </h1>
            <p class="px-4 text-gray-500 dark:text-white">
                Ilmu Pengetahuan Social
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="150"
            class="bg-white shadow-xl p-6 text-center rounded-xl dark:bg-slate-700">
            <div style="background: #0695f4"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 64 64">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #5b97c4;
                            }

                            .cls-2 {
                                fill: #8cbce7;
                            }

                            .cls-3 {
                                fill: #f79341;
                            }

                            .cls-4 {
                                fill: #ffb248;
                            }

                            .cls-5 {
                                fill: none;
                                stroke: #000;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 2px;
                            }

                            .cls-6 {
                                fill: #2b2b4c;
                            }

                            .cls-7 {
                                fill: #8d8d8d;
                            }
                        </style>
                    </defs>
                    <title>Education Insurance</title>
                    <g id="Education_Insurance" data-name="Education Insurance">
                        <path class="cls-1"
                            d="M53,34a1.43,1.43,0,0,1-1,1.35L42,38.81,30.79,42.7a5.31,5.31,0,0,1-3.52,0L16.84,39.09A15,15,0,0,0,36.9,26.71l2.41.94c.08.17.17.33.26.49a11.64,11.64,0,0,0,.92,1.4,12.05,12.05,0,0,0,2.17,2.23A12.43,12.43,0,0,0,47,34a12.21,12.21,0,0,0,3.84-1.85l1.25.49A1.44,1.44,0,0,1,53,34Z" />
                        <path class="cls-2"
                            d="M36.9,26.71A15,15,0,0,1,16.84,39.09L16,38.8,6,35.33a1.43,1.43,0,0,1-.06-2.69l2.63-1L27,24.38a5.4,5.4,0,0,1,4,0Z" />
                        <path class="cls-1" d="M42,38.81V49L29,53,16,49V38.8l11.27,3.9a5.31,5.31,0,0,0,3.52,0Z" />
                        <path class="cls-3"
                            d="M56,13.56v8.58a11.8,11.8,0,0,1-.12,1.69A12.37,12.37,0,0,1,47,34a12.43,12.43,0,0,1-4.34-2.23,12.05,12.05,0,0,1-2.17-2.23,11.64,11.64,0,0,1-.92-1.4c-.09-.16-.18-.32-.26-.49A10.8,10.8,0,0,1,38.63,26a8.86,8.86,0,0,1-.31-1.12A11.81,11.81,0,0,1,38,22.14V13.56l3.5-1,2.5-.71L47,11l1.13.32,6.42,1.83.76.22.2.05Z" />
                        <path class="cls-4"
                            d="M53,12.71v6.43A12.34,12.34,0,0,1,44,31a12.39,12.39,0,0,1-3.77-1.8A12.31,12.31,0,0,1,38,22.14V13.56L47,11Z" />
                        <path class="cls-5" d="M56,22.14V23a2.82,2.82,0,0,1-.12.83A11.8,11.8,0,0,0,56,22.14Z" />
                        <path class="cls-6"
                            d="M29,44a6.21,6.21,0,0,1-2.09-.36L5.64,36.28a2.44,2.44,0,0,1-.1-4.57l10.21-4a1,1,0,0,1,.73,1.86l-10.2,4A.44.44,0,0,0,6,34a.43.43,0,0,0,.3.4l21.3,7.37a4.35,4.35,0,0,0,2.85,0l21.26-7.38A.42.42,0,0,0,52,34a.44.44,0,0,0-.28-.41L51,33.28A13.22,13.22,0,0,1,47.27,35a1,1,0,0,1-.54,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93,1.62,1.62,0,0,0-.1-.18l-8-3.13a4.5,4.5,0,0,0-3.25,0l-7.16,2.81a1,1,0,1,1-.73-1.86l7.16-2.81a6.49,6.49,0,0,1,4.71,0l8.34,3.27a1,1,0,0,1,.54.5c.07.15.15.28.22.42a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,1,1,0,0,1,1-.12l1.25.49a2.43,2.43,0,0,1-.08,4.56L31.12,43.64A6.08,6.08,0,0,1,29,44Z" />
                        <path class="cls-6"
                            d="M29,54a.92.92,0,0,1-.29,0l-13-4A1,1,0,0,1,15,49V38.8a1,1,0,0,1,.42-.81,1,1,0,0,1,.91-.14l11.27,3.9a4.35,4.35,0,0,0,2.85,0l11.22-3.89a1,1,0,0,1,.91.13,1,1,0,0,1,.42.81V49a1,1,0,0,1-.71,1l-4.14,1.27a1,1,0,0,1-.58-1.92L41,48.26v-8l-9.88,3.43a6.31,6.31,0,0,1-4.18,0L17,40.2v8.06L29,52l4.76-1.46a1,1,0,1,1,.58,1.92L29.29,54A.92.92,0,0,1,29,54Z" />
                        <path class="cls-7"
                            d="M46,48a1,1,0,0,1-1-1V37.75L28.72,33A1,1,0,0,1,29.28,31l17,5A1,1,0,0,1,47,37V47A1,1,0,0,1,46,48Z" />
                        <path class="cls-6"
                            d="M46,26a1,1,0,0,1-.71-.29l-2.5-2.5a1,1,0,0,1,1.42-1.42L46,23.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,46,26Z" />
                        <path class="cls-6"
                            d="M47,35a.84.84,0,0,1-.27,0A13.17,13.17,0,0,1,42,32.55a13.61,13.61,0,0,1-3.35-3.93c-.1-.18-.2-.36-.28-.54a10.92,10.92,0,0,1-.73-1.78,10.41,10.41,0,0,1-.34-1.21A13,13,0,0,1,37,22.14V13.56a1,1,0,0,1,.73-1l9-2.56a1,1,0,0,1,.54,0l9,2.56a1,1,0,0,1,.73,1V15a1,1,0,0,1-2,0v-.68L47,12l-8,2.27v7.83a11.11,11.11,0,0,0,.29,2.51,7.85,7.85,0,0,0,.28,1,11.2,11.2,0,0,0,.63,1.53c.08.17.16.3.23.44a12.11,12.11,0,0,0,.86,1.3A11.33,11.33,0,0,0,47,33a11,11,0,0,0,3.25-1.62,11.36,11.36,0,0,0,4.64-7.65A11.2,11.2,0,0,0,55,22.14V19a1,1,0,0,1,2,0v3.14A12.22,12.22,0,0,1,56.87,24a13.35,13.35,0,0,1-5.45,9,13,13,0,0,1-4.15,2A.84.84,0,0,1,47,35Z" />
                    </g>
                </svg>
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-sky-700">
                STMIK Tasikmalaya
            </h1>
            <p class="px-4 text-gray-500 dark:text-white">
                Teknik Informatika
            </p>
        </div>
    </div>

    {{-- certi 1 --}}
    <div class="sm:flex items-center sm:space-x-8 mt-36">
        <div data-aos="fade-right" class="sm:w-1/2 relative">
            <div class="bg-cyan-500 rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
            <h1 class="font-semibold text-2xl relative z-30 text-sky-700 lg:pr-10">
                Sertifikat,
                <span class="text-cyan-500">belajar dasar pemograman web</span>
            </h1>
            <p class="py-5 text-gray-900 lg:pr-32 dark:text-white">
                Mempelajari dasar dasar pemograman web di mulai dari HTML CSS dan Java Script
                dan setelah menyelesaikan semua pelajaran saya mendapatkan sertifiakt.
            </p>
            <a href="#" class="underline dark:text-gray-300">Learn More</a>
        </div>
        <div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
            <div style="background: #0369a1" class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3"></div>
            <img class="rounded-xl z-30 relative" src="img/DICODING.jpg" alt="" />
            <div class="bg-cyan-500 w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"></div>
        </div>
    </div>

    {{-- certi 2 --}}
    <div class="md:flex mt-40 md:space-x-10 items-start">
        <div data-aos="fade-down" class="md:w-7/12 relative">
            <div style="background: #0369a1" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse">
            </div>
            <div style="background: #33d9ef" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"></div>
            <img class="relative z-30 floating" src="img/certificate.png" alt="" />
            <div style="background: #06b6d4" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse">
            </div>
            <div style="background: #f56666" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping">
            </div>
        </div>
        <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
            <h1 class="text-2xl font-semibold text-sky-900 lg:pr-40">
                <span class="text-cyan-500">Sertifikat,</span> Junior Web Developer
            </h1>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="11.8182" height="11.8182" rx="2" fill="#0369a1" />
                        <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#0369a1" />
                        <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#0369a1" />
                        <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2"
                            fill="#06b6d4" />
                    </svg>
                </div>
                <p class="text-gray-900 dark:text-white">
                    Junior Web Developer pada Program Vocational School Graduate Academy
                    Digital Talent Scholarship 2023.

                </p>
            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="6" width="20" height="20" rx="2"
                            fill="#0369a1" />
                        <rect width="21.2245" height="21.2245" rx="2" fill="#06b6d4" />
                    </svg>
                </div>
                <p class="text-gray-900 dark:text-white">Pada tanggal 8-19 Mei 2023 selama 67 Jam Pelatihan.</p>
            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                            fill="#0369a1" />
                    </svg>
                </div>
                <p class="text-gray-900 dark:text-white">
                    Di bimbing langsung dengan mentor yang profesional.
                </p>
            </div>
        </div>
    </div>

    <!-- tech stack -->
    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
        <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
            <h1 class="text-sky-900 font-semibold text-3xl lg:pr-56">
                <span class="text-cyan-500">Tech</span> Stack
            </h1>
            <p class="text-gray-900 my-4 lg:pr-32 dark:text-white">
                Ini beberapa tech stack yang biasa saya gunakan untuk membangun sebuah website,
                meski belum piawai dalam mengoprasikan nya, tetapi saya mengerti dasar dasar bagaimana cara bekerja
                technology ini.
            </p>
        </div>
        <img data-aos="fade-left" class="md:w-1/2" src="img/tech1.png" />
    </div>

    <!-- design-->
    <div class="mt-20 flex flex-col-reverse md:flex-row items-center md:space-x-10">
        <div data-aos="fade-right" class="md:w-6/12">
            <img class="md:w-11/12" src="img/design1.png" />
        </div>
        <div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
            <h1 class="font-semibold text-sky-900 text-3xl lg:pr-64">
                Graphic <span class="relative inline-block px-2">
                    <div class="absolute inset-0 transform -skew-x-[24deg] bg-cyan-500"></div>
                    <span class="relative text-white">Design</span>
                </span>
            </h1>
            <p class="text-gray-900 my-5 lg:pr-52 dark:text-white">
                Saya sangat senang membuat design gambar, baik itu poster ataupun gambar lainnya, membuat design webiste
                juga sangat menarik 🎨
            </p>
        </div>
    </div>
@endsection
