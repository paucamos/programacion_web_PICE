
@extends('layouts.frontend')
@section('content')
    <h1>Crea categoria:</h1>
    {{Form::open(['url'=>route('categories.store'), 'class'=>'form'])}}
        Nom:
            <?php
                $estil = "";
                if($errors->first('name')) {
                    $estil = "background-color: red";
                }
            ?>
            {{Form::text('name',old('name'),['class' => 'clase1', 'id' => 'identificador1', 'style' => $estil])}}
            {!! $errors->first('name', '<p>Error: :message</p>') !!}
        Logo:
            {{Form::text('icon','',['class' => 'clase2', 'id' => 'identificador2'])}}
        Descripcio:
            {{Form::textarea('message', old('message'))}}
        <br>
            {{Form::submit('Envia', ['class' => 'btn'])}}
    {{Form::close()}}
@endsection