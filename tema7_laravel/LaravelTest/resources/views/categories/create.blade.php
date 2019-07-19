
@extends('layouts.frontend')
@section('content')
    <h1>Crea categoria:</h1>
    {{Form::open(['url'=>route('categories.store'), 'class'=>'form'])}}
        Nom:
            {{Form::text('name','',['class' => 'clase1', 'id' => 'identificador1'])}}
        Logo:
            {{Form::text('icon','',['class' => 'clase2', 'id' => 'identificador2'])}}
        <br>
            {{Form::submit('Envia', ['class' => 'btn'])}}
    {{Form::close()}}
@endsection