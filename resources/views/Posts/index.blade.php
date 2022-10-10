@extends('layouts.app')
@section('title', 'Dominando o Eloquent')


@section('content')
    <h1 class="text-4xl font-bold leading-tigh py-4 text-center uppercase">Listagem de usuarios</h1>

    <table class="w-full px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 tracking-wider text-center">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase text-center">ID</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase text-center">Titulo</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase text-center">descrição</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase text-center">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->id }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->title }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->content }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
