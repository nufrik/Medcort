@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 dark:bg-gray-900  sm:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
