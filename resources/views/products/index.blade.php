@extends('layouts.app')

@section('content')

<br/><br/>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <table class="table table-striped task-table">
            <!-- Table Headings -->
                <thead>
                <th>Product ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
            </thead>
            <!-- Table Body -->
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection