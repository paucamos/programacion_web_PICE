@extends('layouts.frontend')
@section('content')
    {{Form::open(['url' => route('categories.update', $category->id), "method" => 'PUT'])}}
        Nom:
        {{Form::text('name', $category->name)}}
        Icon:
        {{Form::text('icon', $category->icon)}}
            <br>
        {{Form::submit('Envia')}}
    {{Form::close()}}
@endsection