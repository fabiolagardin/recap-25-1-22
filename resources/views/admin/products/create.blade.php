@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <h1>New Product</h1>
            <label for="name">Name </label>
            <input type="text" name="name" id="" placeholder="New name">

            <label for="detail">Detail</label>
            <input type="text" name="detail" id="" placeholder="detail">


            <div class="mb-3">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>

@endsection
