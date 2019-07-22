@extends('layouts.frontend')
@section('content')
    <h1>Categories:</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Logo</th>
            <th>Accions</th>
        </tr>
        <a href="{{route('categories.create')}}">Afegir Categoria</a>
        @forelse($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->icon}}</td>
            <td>
                <a href="{{route('categories.show', $category->id)}}">Veure</a>
                <a href="{{route('categories.edit', $category->id)}}">Modificar</a>
                <a href="{{route('destroyCategory', $category->id)}}">Eliminar</a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="3"> No hi ha categories definides.</td>
            </tr>
        @endforelse
    </table>
@endsection