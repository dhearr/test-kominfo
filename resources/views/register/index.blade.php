@extends('layouts.main')

@section('container')
    <div class="max-w-screen-xl px-8 mx-auto flex justify-center">
        <!--Left Col-->
        <div class="flex justify-center py-16">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-sky-700">Sign up
            </h1>
        </div>
    </div>
@endsection
@section('body')
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <form action="/register" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                <p class="text-center text-gray-900 text-lg font-medium dark:text-white">Create Account</p>


                <div>
                    <label for="name" class="">Nama</label>

                    <div class="relative">
                        <input type="text" name="name" id="name"
                            class="form-control w-full rounded-lg border-gray-200 focus:ring-cyan-500 focus:border-cyan-500 p-4 pe-12 text-sm shadow-sm @error('name') is-invalid @enderror"
                            placeholder="Enter name" required="" autofocus value="{{ old('name') }}" />
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>


                <div>
                    <label for="username" class="">Username</label>

                    <div class="relative">
                        <input type="text" name="username" id="username"
                            class="form-control w-full rounded-lg border-gray-200 focus:ring-cyan-500 focus:border-cyan-500 p-4 pe-12 text-sm shadow-sm @error('username') is-invalid @enderror"
                            placeholder="Enter username" required="" autofocus value="{{ old('username') }}" />
                        @error('username')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="">Email</label>

                    <div class="relative">
                        <input type="email" name="email" id="email"
                            class="form-control w-full rounded-lg border-gray-200 focus:ring-cyan-500 focus:border-cyan-500 p-4 pe-12 text-sm shadow-sm @error('email') is-invalid @enderror"
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
                    Register
                </button>

                <p class="text-center text-sm text-sky-700">
                    you have an account?
                    <a class="underline" href="/login">sign in now!</a>
                </p>
            </form>
        </div>
    </div>
@endsection
