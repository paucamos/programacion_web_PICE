@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
@endsection
