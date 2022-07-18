@extends('master')
@section('content')
    <table border="5">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Category</td>
            <td>Description</td>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['category'] }}</td>
                <td>{{ $product['description'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
