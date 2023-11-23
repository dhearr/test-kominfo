@extends('layouts.main')


@section('container')
    <div class="max-w-screen-xl px-8 mx-auto flex justify-center">
        <!--Left Col-->
        <div class="flex justify-center py-16">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-sky-700">
                {{ $title }}</h1>
        </div>
    </div>
@endsection
@section('body')
    <div class="flex justify-center mb-12 mt-5">

        {{-- Serch --}}
        <form data-aos="fade-up" data-aos-delay="150" action="/blog" class="w-2/4">
            @if (request('category', 'author'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="flex justify-center">
                <div class="relative w-screen md:w-full">
                    <input type="text"
                        class="form-control block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-xl border border-cyan-300 focus:ring-cyan-500 focus:border-cyan-500 dark:bg-gray-300 dark:border-none"
                        placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 h-full text-sm font-medium text-white bg-cyan-500 rounded-r-xl hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-cyan-300"><svg
                            class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg></button>
                </div>
            </div>
        </form>
    </div>

    {{-- Post Hero --}}
    @if ($posts->count())
        <article data-aos="fade-right" data-aos-delay="150"
            class="max-w-sm mx-auto mb-5 md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
            <div>
                <header>
                    <div class="mb-3">
                        <ul class="flex flex-wrap text-xs font-medium -m-1">
                            <li class="m-1">
                                <a class="inline-flex text-center text-white py-1 px-3 rounded-full bg-cyan-500 hover:bg-cyan-600 dark:text-gray-900 transition duration-150 ease-in-out"
                                    href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold leading-tight mb-2">
                        <a class="hover:text-gray-700 text-gray-900 dark:text-white transition duration-150 ease-in-out"
                            href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                    </h3>
                </header>
                <p class="text-lg text-gray-500 flex-grow">{{ $posts[0]->excerpt }}</p>
                <footer class="flex items-center mt-4">
                    <div>
                        <a class="font-medium text-gray-700 hover:text-gray-500 transition duration-150 ease-in-out"
                            href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        <span class="text-gray-400"> - </span>
                        <span class="text-gray-400">{{ $posts[0]->created_at->diffForHumans() }}</span>
                    </div>
                </footer>
            </div>
            @if ($posts[0]->image)
                <a class="relative block group" href="/blog/{{ $posts[0]->slug }}">
                    <div class="absolute inset-0 bg-cyan-500 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none"
                        aria-hidden="true"></div>
                    <figure
                        class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                        <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out"
                            src="{{ asset('storage/' . $posts[0]->image) }}" width="540" height="303" alt="Blog post">
                    </figure>
                </a>
            @else
                <a class="relative block group" href="/blog/{{ $posts[0]->slug }}">
                    <div class="absolute inset-0 bg-cyan-500 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none"
                        aria-hidden="true"></div>
                    <figure
                        class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                        <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out"
                            src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" width="540"
                            height="303" alt="Blog post">
                    </figure>
                </a>
            @endif
        </article>

        {{-- Post Child --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 my-5">
            @foreach ($posts->skip(1) as $post)
                <div data-aos="fade-left" data-aos-delay="150">
                    <div class="container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-sm text-gray-400 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                            <a rel="noopener noreferrer" href="/blog?category={{ $post->category->slug }}"
                                class="font-normal text-sm text-white hover:bg-cyan-600 bg-cyan-500 rounded-full py-1 px-3 dark:bg-cyan-400 dark:text-gray-900">{{ $post->category->name }}</a>
                        </div>
                        <div class="mt-3">
                            <a rel="noopener noreferrer" href="/blog/{{ $post->slug }}"
                                class="text-2xl text-gray-900 hover:text-gray-700 dark:text-white hover:underline font-bold">{{ $post->title }}</a>
                            <p class="mt-2 text-gray-500">{{ $post->excerpt }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a rel="noopener noreferrer" href="/blog/{{ $post->slug }}"
                                class="text-gray-700 hover:text-gray-500 dark:text-cyan-400">Read
                                more</a>
                            <div>
                                <a rel="noopener noreferrer" href="/blog?author={{ $post->author->username }}"
                                    class="flex items-center">
                                    <span class="hover:underline dark:text-gray-400">{{ $post->author->name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <section class="flex items-center h-full sm:p-16 dark:bg-gray-900 dark:text-gray-100">
            <div
                class="container flex flex-col items-center justify-center px-5 mx-auto my-8 space-y-8 text-center sm:max-w-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-40 h-40 dark:text-gray-600">
                    <path fill="currentColor"
                        d="M256,16C123.452,16,16,123.452,16,256S123.452,496,256,496,496,388.548,496,256,388.548,16,256,16ZM403.078,403.078a207.253,207.253,0,1,1,44.589-66.125A207.332,207.332,0,0,1,403.078,403.078Z">
                    </path>
                    <rect width="176" height="32" x="168" y="320" fill="currentColor"></rect>
                    <polygon fill="currentColor"
                        points="210.63 228.042 186.588 206.671 207.958 182.63 184.042 161.37 162.671 185.412 138.63 164.042 117.37 187.958 141.412 209.329 120.042 233.37 143.958 254.63 165.329 230.588 189.37 251.958 210.63 228.042">
                    </polygon>
                    <polygon fill="currentColor"
                        points="383.958 182.63 360.042 161.37 338.671 185.412 314.63 164.042 293.37 187.958 317.412 209.329 296.042 233.37 319.958 254.63 341.329 230.588 365.37 251.958 386.63 228.042 362.588 206.671 383.958 182.63">
                    </polygon>
                </svg>
                <p class="text-3xl">Ups... Blog yang anda cari tidak ada</p>
                <a rel="noopener noreferrer" href="/blog"
                    class="px-8 py-3 font-semibold rounded hover:underline dark:bg-cyan-400 dark:text-gray-900">Back to
                    Blog</a>
            </div>
        </section>
    @endif
    <div class="flex justify-center my-5">
        {{ $posts->links() }}
    </div>
@endsection
