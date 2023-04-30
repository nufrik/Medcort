@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 3)

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="mb-4 text-5xl font-extrabold text-center">
                    <span class="bg-clip-text text-transparent  bg-gradient-to-r from-pink-500 to-violet-500">Редактирование книги</span>
                </div>
                <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 leading-5">
                                Название
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input name="title" value="{{ $book->title }}" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('title') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                            </div>

                            @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="title" class="block text-sm font-medium text-gray-700 leading-5">
                                Категория
                            </label>

                            <select name="category_id" class="form-select appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" aria-label="Пример выбора по умолчанию">
                                <option selected>Откройте это меню выбора</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="mt-3">
                            <label for="author" class="block text-sm font-medium text-gray-700 leading-5">
                                Автор
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input name="author" value="{{ $book->author }}" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('author') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                            </div>

                            @error('author')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="description" class="block text-sm font-medium text-gray-700 leading-5">
                                Описание
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <textarea name="description" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">{{ $book->description }} </textarea>
                            </div>

                            @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="rating" class="block text-sm font-medium text-gray-700 leading-5">
                                Рейтинг
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input name="rating" value="{{ $book->rating }}" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('rating') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                            </div>

                            @error('rating')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="rating" class="block text-sm font-medium text-gray-700 leading-5">
                                Обложка
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input name="cover"  type="file" autofocus class=" @error('cover') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                            </div>

                            @error('cover')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Изменить книгу
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
