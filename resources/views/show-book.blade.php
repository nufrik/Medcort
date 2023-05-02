@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

        <div class="container-center">

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

        <div class="col-md-8 mt-3">
            @if(isset($comments))
                @foreach($comments as $comment)
                    <ul class="list-group list-group-flush">
                        <small class="text-end text-white">{{ $comment->created_at }}</small>
                        <small class="text-end text-white">{{ $comment->user->name }}</small>
                        <li class="list-group-item">{{ $comment->text }}</li>
                        <li class="list-group-item"></li>
                    </ul>
                @endforeach
            @endif

            @if(Auth::check())
                <form action="{{ route('add.comment', ['id' => $book->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <textarea name="text" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Оставить комментарий</button>
                </form>
            @else
                <div class="mb-3">
                    <p class="text-white">Чтобы оставить комментарий нужно <a href="{{ route('login') }}">Войти</a> или <a href="{{ route('register') }}">Зарегистрироваться</a></p>
                </div>

            @endif
        </div>
        </div>
    </div>

@endsection


