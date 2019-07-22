@extends('layouts.frontend')
@section('content')
    @forelse($brands as $brand)
        {{$brand->name}}<br>
        @empty
        No hi ha marques.
    @endforelse
@endsection
