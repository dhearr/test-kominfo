@extends('layouts.main')

@section('container')
    <section class="jumbotron text-center bg-gradient-to-br from-emerald-200 to-emerald-50 mix-blend-multiply">
        <div class="flex justify-center mt-20">
            <h1 class="text-sky-900 font-bold text-4xl lg:text-5xl">{{ $title }}</h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cold-1 mx-5 gap-4">
            @foreach ($categories as $category)
            <div class="flex justify-center my-10">
                <a href="/blog?category={{ $category->slug }}">
                    <div class="card text-bg-dark transition duration-300 hover:-translate-y-3 rounded-xl">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection
