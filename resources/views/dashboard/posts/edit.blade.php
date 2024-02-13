@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ml-5 pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Posts</h1>
    </div>

    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="ml-5 my-4" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-4 sm:grid-cols-2">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="title" id="title"
                    class="form-control mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-300 focus:border-emerald-300 block w-full p-2.5 @error('title') is-invalid @enderror"
                    placeholder="Create your title . . ." value="{{ old('title', $post->title) }}">
                @error('title')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                <input type="text" name="slug" id="slug"
                    class="mb-2 bg-gray-50 border border-gray-300 focus:ring-white focus:border-white text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('slug') is-invalid @enderror"
                    value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4"><label for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-300 focus:border-emerald-300 block w-full p-2.5">
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image
                    Post</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none  @error('image') is-invalid @enderror"
                    aria-describedby="user_avatar_help" id="image" name="image" type="file"
                    onchange="previewImage()">
                @error('image')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2"><label for="body"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sampel</label>
                @error('body')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor class="dark:bg-gray-100" input="body"></trix-editor>
            </div>
        </div>
        <div class="items-center justify-end space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <a href="/dashboard/posts"><button type="button"
                    class="w-full sm:w-auto justify-center text-white inline-flex bg-cyan-500 hover:bg-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</button></a>
            <button type="submit"
                class="w-full sm:w-auto justify-center text-white inline-flex bg-cyan-500 hover:bg-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
        </div>
    </form>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
