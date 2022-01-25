@extends('layouts.app')

@section('content')

    @foreach ($products as $product)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $product->name }}</h4>
                <p class="card-text">{{ $product->detail }}</p>
                <a href="{{ route('product', $product->id) }}" class="btn btn-primary">Click</a>
            </div>
        </div>

    @endforeach

@endsection
