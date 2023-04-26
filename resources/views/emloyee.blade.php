@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 1)


    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
