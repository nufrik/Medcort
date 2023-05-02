@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 1)


            <div class="container-center">

            <table class="ml-10 table-auto border-collapse border border-slate-500 text-white border-separate">
                <caption class="caption-top text-center">
                    Категории.
                </caption>
                <thead>
                <tr>
                    <th class="border border-slate-600">№</th>
                    <th class="border border-slate-600">Жанр</th>
                    <th class="border border-slate-600">Изменить</th>
                    <th class="border border-slate-600">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="border border-slate-700">{{ $category->id }}</td>
                        <td class="border border-slate-700">{{ $category->title }}</td>
                        <td class="border border-slate-700"><a href="{{ route('edit.category', ['id' => $category->id]) }}" >Изменить</a></td>
                        <td class="border border-slate-700 text-danger"><a href="{{ route('delete.category', ['id' => $category->id]) }}" >Удалить</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


                    <div class="mt-2 ml-10">
                        <a href="{{ route('new.category') }}"><button type="submit" class="btn btn-primary">Добавить категорию</button></a>
                    </div>

            </div>

    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
