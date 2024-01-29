@extends('layout/main')
@section('main-section')

<div class="container mt-4">
    <table  class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th> Author </th>
                <th>Stock</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td> {{ $book->id }} </td>
                <td> {{ $book->title }} </td>
                <td> {{ $book->author }} </td>
                <td> {{ $book->stock }} unit </td>
                <td> {{ $book->price }} $ </td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('book.show' , $book->id)}}" class="btn btn-success">View</a>
                        <div class="mx-1"></div> <!-- Small gap -->
                        <a href="{{ route('book.edit' , $book->id) }}" class="btn btn-info">Edit</a>
                        <div class="mx-1"></div> <!-- Small gap -->
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<div>
    {{$books ->withQueryString()->links()}} ;
</div>
@endsection