@extends('layouts.app')

@section('content')

    <section>
        <a name="" id="" class="btn btn-primary" href="{{ route('products.create') }}" role="button">Create New</a>
    </section>

    @if (session('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)

                <tr>
                    <td scope="row">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}">View</a>-
                        <a href="{{ route('products.edit', $product->id) }}">Edit</a>-
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#product-{{ $product->id }}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="product-{{ $product->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Elimina</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Eliminazione non reversibile
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                data-bs-dismiss="modal">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>


@endsection
