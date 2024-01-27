@extends('layout/main')

@section('main-section')
    <h1 class="text-center"> <b>Book Details</b></h1>
    <table class="table table-bordered mx-auto" border="1">
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $book->isbn }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $book->stock }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }}</td>
        </tr>
    </table>
@endsection