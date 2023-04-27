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
                    <th class="border border-slate-600">Изментить роль</th>
                    <th class="border border-slate-600">Удалить юзера</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border border-slate-700">{{ $user->id }}</td>
                        <td class="border border-slate-700">{{ $user->name }}</td>
                        <td class="border border-slate-700">{{ $user->email }}</td>
                        @if($user->role_id == 3)
                            <td class="border border-slate-700 text-success"> {{ $user->role->name }}</td>
                        @elseif($user->role_id == 1)
                            <td class="border border-slate-700 text-info"> {{ $user->role->name }}</td>
                        @else
                            <td class="border border-slate-700"> {{ $user->role->name }}</td>
                        @endif

                        @if($user->role_id == 3)
                            <td class="border border-slate-700 text-danger"></td>
                            <td class="border border-slate-700 text-danger"></td>
                        @elseif($user->role_id == 1)
                            <td class="border border-slate-700 text-danger"><a href=" {{ route('change.role', ['id' => $user->id]) }}" >Сделать читателем</a></td>
                            <td class="border border-slate-700 text-danger"><a href=" {{ route('delete.user', ['id' => $user->id]) }}" >Удалить</a></td>
                        @else
                            <td class="border border-slate-700 text-success"><a href=" {{ route('change.role', ['id' => $user->id]) }}" >Сделать сотрудником</a></td>
                            <td class="border border-slate-700 text-danger"><a href=" {{ route('delete.user', ['id' => $user->id]) }}" >Удалить</a></td>
                        @endif

                    </tr>
                @endforeach
                </tbody>
            </table>
    @else
        <h1 class="text-white text-5xl">У вас нет доступа!</h1>
    @endif
@endsection
