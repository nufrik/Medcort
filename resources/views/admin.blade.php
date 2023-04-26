@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 3)

            <div class="p-6 mx-auto max-w-7xl lg:p-8">
                <div class="text-5xl font-extrabold ...">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Таблицы</span>
                </div>

                    <div class="mt-6 rounded-full flex justify-center box-decoration-slice bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 basis-1/4"><a href ="{{ route('admin.users') }}">Юзеры</a></div>
                    <div class="mt-6 rounded-full flex justify-center box-decoration-slice bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 basis-1/4"><a href ="{{ route('admin.categories') }}">Категории</a></div>
                    <div class="mt-6 rounded-full flex justify-center box-decoration-slice bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 basis-1/4"><a href ="{{ route('admin.books') }}">Книги</a></div>

            </div>

    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
