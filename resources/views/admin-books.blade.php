@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 3)



            <table class="ml-10 mt-10 table-auto border-collapse border border-slate-500 text-white border-separate">
                <caption class="caption-top text-center">
                    Книги.
                </caption>
                <thead>
                <tr>
                    <th class="border border-slate-600">№</th>
                    <th class="border border-slate-600">Название</th>
                    <th class="border border-slate-600">Автор</th>
                    <th class="border border-slate-600">Описание</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="border border-slate-700">{{ $book->id }}</td>
                        <td class="border border-slate-700">{{ $book->title }}</td>
                        <td class="border border-slate-700">{{ $book->author }}</td>
                        <td class="border border-slate-700">{{ $book->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>




    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
