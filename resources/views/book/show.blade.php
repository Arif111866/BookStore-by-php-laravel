@extends('layout/main')

@section('main-section')
    <h1 class="text-center"> <b>Book Details</b></h1>
    <table class="table table-striped">
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
            <td>{{ $book->stock }} unit</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }} $</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="{{ route('book.homepage') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle-fill"></i> Go Back </a>
@endsection