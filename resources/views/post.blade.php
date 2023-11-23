@extends('layouts.main')

@section('container')
    <a href="/blog" class="text-sky-700 text-sm md:px-16 py-5 px-4 hover:underline inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left mr-2"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
        Back to Blog
    </a>

    <div class="max-w-2xl px-8 mx-auto flex justify-center">
        <!--Left Col-->
        <div class="flex text-center justify-center py-16">
            <div class="w-full mx-auto space-y-4">
                <h1 class="text-5xl font-bold text-sky-700">{{ $post->title }}</h1>
                <div class="flex justify-center text-center space-x-2 text-sm dark:text-gray-400">
                    <a rel="noopener noreferrer" href="#"
                        class="py-1 px-3 text-white bg-cyan-500 rounded-full hover:bg-cyan-600">{{ $post->category->name }}</a>
                </div>
                <p class="text-sm dark:text-gray-400">
                    <a href="#" target="_blank" rel="noopener noreferrer"
                        class="hover:underline dark:text-cyan-400 text-sky-900">
                        <span>{{ $post->author->name }}</span>
                    </a> -
                    <time class="text-sky-900">{{ $post->created_at->diffForHumans() }}</time>
                </p>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <article class="max-w-2xl px-6 py-10 mx-auto leading-7 normal-case dark:bg-gray-800 dark:text-gray-50">

        <div class="text-gray-900 dark:text-gray-100">
            <p>{!! $post->body !!}</p>
        </div>
    </article>
@endsection
