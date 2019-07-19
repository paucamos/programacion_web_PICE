@extends('layouts.frontend')
@section('content')
    <h1>{{trans('web.catalog')}}:</h1>
    @forelse($products as $product)
            <h3><a href="{{route('cataleg_detall', $product->id)}}">{{$product->name}}</a></h3>
            <p>{{$product->description}}</p>
        <hr>
        @empty
            <p>No hi ha productes.</p>
    @endforelse
@endsection