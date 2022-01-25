@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Edit Product</h1>
            <label for="name">Name </label>
            <input type="text" name="name" id="" value="{{ $product->name }}">

            <label for="detail">Detail</label>
            <input type="text" name="detail" id="" value="{{ $product->detail }}">

            <div class=" mb-3">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>

@endsection
