@extends('layouts.frontend')
@section('content')
    <h1>{{trans('web.contact')}}:</h1>
    <form>
        <label for="name">{{trans('web.name')}}:</label>
        <input name="name" type="text" value="{{Auth::user()->name}}">
        <br>
        <label for="message">{{trans('web.message')}}:</label>
        <textarea name="message"></textarea>
        <br>
        <button>{{trans('web.send')}}</button>
    </form>
@endsection