@extends('dashboard.layouts.main')

@section('container')
    <main class="mt-10">
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                    class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            @else
                <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                    class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            @endif
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href=""
                    class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{ $post->title }}
                </h2>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-10 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <article class="my-3 fs-5 text-justify dark:bg-gray-800 dark:text-white">
                {!! $post->body !!}
            </article>
            <a href="/dashboard/posts"
                class="flex text-white font-semibold text-sm mb-12 mt-2 bg-cyan-500 p-2 hover:bg-cyan-600 rounded-lg inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left mr-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Back to My Posts
            </a>
        </div>
    </main>
@endsection
