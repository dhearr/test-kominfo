@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ml-0 xl:ml-5 pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-gray-900 dark:text-white">Selamat Datang, {{ auth()->user()->name }}</h1>
    </div>
@endsection
