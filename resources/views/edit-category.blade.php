@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 3)

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="mb-4 text-5xl font-extrabold">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Редактировать категорию</span>
                </div>
                <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                    <form action="#" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                                Введите жанр
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input name="title" value="{{ $category->title }}" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('title') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                            </div>

                            @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Редактировать
                        </button>
                    </span>
                        </div>
                    </form>
                </div>
            </div>

    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
