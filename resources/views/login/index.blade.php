@extends('layouts.main')

@section('container')
    <div class="max-w-screen-xl px-8 mx-auto flex justify-center">
        <!--Left Col-->
        <div class="flex justify-center py-16">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-sky-700">Sign in
            </h1>
        </div>
    </div>
@endsection
@section('body')
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            {{-- alert success --}}
            @if (session()->has('succes'))
                <div id="alert-3" class="relative flex items-center p-4 mb-2 mt-3 text-green-800 rounded-lg bg-green-50"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('succes') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            {{-- end alert success --}}
            {{-- alert error --}}
            @if (session()->has('loginError'))
                <div id="alert-3" class="relative flex items-center p-4 mb-2 mt-3 text-red-800 rounded-lg bg-red-100"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('loginError') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            {{-- end alert error --}}
            <form action="/login" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                <p class="text-center text-gray-900 text-lg font-medium dark:text-white">Sign in to your account</p>

                <div>
                    <label for="email" class="">Email</label>

                    <div class="relative">
                        <input type="email" name="email" id="email"
                            class="w-full form-control rounded-lg border-gray-200 focus:ring-cyan-500 focus:border-cyan-500 p-4 pe-12 text-sm shadow-sm @error('email') is-invalid @enderror"
                            placeholder="Enter email" required="" autofocus value="{{ old('email') }}" />
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="">Password</label>

                    <div class="relative">
                        <input type="password" name="password" id="password"
                            class="w-full rounded-lg border-gray-200 focus:ring-cyan-500 focus:border-cyan-500 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter password" required="" />
                    </div>
                </div>

                <button type="submit"
                    class="block w-full rounded-lg bg-cyan-500 hover:bg-cyan-600 px-5 py-3 text-sm font-medium text-white">
                    Sign in
                </button>

                <p class="text-center text-sm text-sky-700">
                    No account?
                    <a class="underline" href="/register">Sign up</a>
                </p>
            </form>
        </div>
    </div>
@endsection
