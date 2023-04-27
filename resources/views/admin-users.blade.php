@extends('layouts.app')

@section('content')

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

    @if(Auth::user()->role_id == 3)



            <table class="table-auto border-collapse border border-slate-500 text-white border-separate">
                <caption class="caption-top text-center">
                    Юзеры.
                </caption>
                <thead>
                <tr>
                    <th class="border border-slate-600">№</th>
                    <th class="border border-slate-600">Имя</th>
                    <th class="border border-slate-600">Емайл</th>
                    <th class="border border-slate-600">Роль</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border border-slate-700">{{ $user->id }}</td>
                        <td class="border border-slate-700">{{ $user->name }}</td>
                        <td class="border border-slate-700">{{ $user->email }}</td>
                        <td class="border border-slate-700">{{ $user->role_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>




    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
