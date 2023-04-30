@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">



        <div class="card">
            <img src="{{ asset('/storage/' . $book->cover) }}" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title text-2xl font-bold">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->description }}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Автор: {{ $book->author }}</small><hr>
                <small class="text-muted">Рейтинг: {{ $book->rating }}</small>
            </div>
        </div>
    </div>

@endsection


