@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            @forelse($products as $product)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$product->image}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            @empty
                <p>No hi ha productes.</p>
            @endforelse
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h3>Categories:</h3>
                </div>
            @forelse($categories as $category)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$category->name}}</li>
                    </ul>
            @empty
                <p>No hi ha categories.</p>
            @endforelse
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h3>Marques:</h3>
                </div>
            @forelse($brands as $brand)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$brand->name}}</li>
                    </ul>
            @empty
                <p>No hi ha categories.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection