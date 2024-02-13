@extends('dashboard.layouts.main')

@section('container')
    <main class="mt-10">
        <div class="px-4 lg:px-0 mt-10 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sampel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $post->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $post->category->name }}
                            </td>
                            <td class="px-6 py-4">
                                {!! $post->body !!}
                            </td>
                            <td class="px-6 py-4">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" width="40" />
                                @else
                                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                                        width="40" />
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex items-start">
                <a href="/dashboard/posts"
                    class="flex text-white font-semibold text-sm mb-12 mt-2 bg-cyan-500 p-2 hover:bg-cyan-600 rounded-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left mr-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Back
                </a>
            </div>
        </div>
    </main>
@endsection
