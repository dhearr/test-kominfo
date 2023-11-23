@extends('layouts.main')

{{-- kontent --}}
@section('container')
    {{-- ABOUT --}}
    <section class="jumbotron text-center bg-gradient-to-b from-emerald-200 from-50% to-white">
        <div class="w-auto mt-24 mx-10 text-center border-1 border-emerald-300 rounded-3xl bg-transparent to-emerald-50 backdrop-filter backdrop-blur-lg shadow sm:p-8"
            style="background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')">
            <header
                class="flex item-center text-2xl md:text-3xl font-semibold text-sky-900 justify-start container mx-auto  my-3 md:my-0">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
                    About Me &nbsp;
                </div>
            </header>
            <section
                class="text-sm md:text-lg text-justify flex flex-col gap-4 md:flex-row md:gap-8 md:justify-left md:items-center">
                <div class="flex justify-center">
                    <img class="w-9/12 border-1 border-transparent rounded-full mb-3 fadein-up"
                        src="{{ asset('/img/dhea.png') }}" alt="Foto">
                </div>
                <div class="md:w-7/12">
                    <p class="mb-4 mx-4 xl:mx-0 lg:mx-0 md:mx-0 md:mb-7 text-sky-950 fadein-left fadeins-1">
                        &nbsp; &nbsp; &nbsp; Halo guysss! Nama saya Dhea Ramdani. Saya seorang <span
                            class="font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">Pengembang
                            Web</span> dan <span
                            class="font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">Graphic
                            Design</span> dari Ciamis, JawaBarat. Meski belum memiliki banyak pengalaman dalam pengembangan
                        web tapi saya sering mengasah skill saya dalam bidang ini.
                        Saya sangat menikmati apa yang saya lakukan saat ini, menurut saya membuat program bukan sekedar
                        pekerjaan, tapi juga sebuah seni dan itu memiliki nilai estetika nya tersendiri.
                    </p>
                </div>
            </section>
        </div>

        {{-- SKILLS --}}
        <header
            class="flex item-center text-2xl md:text-3xl font-semibold text-sky-900 justify-center container my-5 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
                Skills &nbsp;
            </div>
        </header>
        <div class="flex item-center justify-center container my-5 mx-auto">
            <ul class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-1" id="tabExample" role="tablist">
                <li class="mr-5" role="presentation">
                    <button class="inline-block p-2 hover:text-emerald-600 dark:hover:text-gray-300" id="tech-tab-example"
                        type="button" role="tab" aria-controls="tech-example" aria-selected="false">Technology</button>
                </li>
                <li class="ml-5" role="presentation">
                    <button class="inline-block p-2 hover:text-emerald-600 dark:hover:text-gray-300" id="tools-tab-example"
                        type="button" role="tab" aria-controls="tools-example" aria-selected="false">Tools</button>
                </li>
            </ul>
        </div>
        <div id="tabContentExample" class="flex item-center justify-center container my-5 mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="tech-example" role="tabpanel"
                aria-labelledby="tech-tab-example">



                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/html.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">HTML</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/css.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">CSS</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/js.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 text-xs font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">javascript</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/php.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">php</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/laravel.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 text-xs font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">laravel</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/tailwind.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 text-xs font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">tailwind</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/react.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 text-xs font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">react</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/bootstrap.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 text-xs font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">bootstrap</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="tools-example" role="tabpanel"
                aria-labelledby="tools-tab-example">

                {{-- tools --}}
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/git.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">git</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/github.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">github</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/npm.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">npm</p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-xl hover:shadow-xl transition-all duration-300 hover:scale-110 cursor-pointer hover:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] group">
                    <div
                        class="rounded-xl group-hover:bg-gradient-to-b from-emerald-100 via-transparent to-transparent">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-xl overflow-hidden items-center mx-auto group-hover:animate-bounce">
                                <img src="{{ asset('/img/sql.png') }}" alt="" class="h-12 w-12 md:h-16 md:w-16">
                            </div>
                            <p class="hidden group-hover:block group-hover:opacity-100 font-bold text-sky-950 uppercase bg-gradient-to-r from-emerald-300 to-transparent">mysql</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#a7f3d0" fill-opacity="5"
                    d="M0,0L48,37.3C96,75,192,149,288,181.3C384,213,480,203,576,181.3C672,160,768,128,864,144C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>
@endsection
