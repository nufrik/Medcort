@extends('layouts.base')

@section('body')

    @yield('content')


    @if (Route::has('login'))

        <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">

            @auth
                @if(Auth::user()->role_id == 3)
                    <a href="" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Вы зашли как: {{ Auth::user()->name }}</a>

                    <a href="{{ url('/admin') }}" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Админка</a>


                @elseif(Auth::user()->role_id == 1)
                    <a href="" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Вы зашли как:  {{ Auth::user()->name }}</a>
                    <a href="{{ url('/employee') }}" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Сотрудник</a>
                @elseif(Auth::user()->role_id == 2)
                    <a href="" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Вы зашли как:  {{ Auth::user()->name }}</a>
                @endif
                    <a href="{{ url('/logout') }}" class="mr-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Выйти</a>
            @else

                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">{{ 'Войти' }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">{{ 'Регистрация' }}</a>
                @endif
            @endauth
        </div>
    @endif

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
