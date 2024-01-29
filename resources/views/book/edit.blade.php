
@extends('layout/main')
@section('main-section')

<div class="container mt-4" >
    <form method="post" action="{{ route('book.update', ['id' => $book->id]) }}">
        @csrf

        <input type="hidden" name="id" value="{{ $book->id }}">
        <div class="form-group">
            <label for="bookTitle" class="col-md-3 col-form-label">Title:</label>
            <input type="text" class="form-control" id="bookTitle" name="title" value="{{old("title" , $book->title)}}">
            <div> {{$errors->first("title", ":message")}} </div>
        </div>

        <div class="form-group">
            <label for="bookAuthor" class="col-md-3 col-form-label">Author:</label>
            <input type="text" class="form-control" id="bookAuthor" name="author" value="{{old("author" , $book->author)}}">
            <div> {{$errors->first("author", ":message")}} </div>
        </div>

        <div class="form-group">
            <label for="bookISBN" class="col-md-3 col-form-label">ISBN:</label>
            <input type="text" class="form-control" id="bookISBN" name="isbn" value="{{old("isbn" , $book->isbn)}}">
            <div> {{$errors->first("isbn", ":message")}} </div>
        </div>

        <div class="form-group">
            <label for="bookPrice" class="col-md-3 col-form-label">Price:</label>
            <input type="text" class="form-control" id="bookPrice" name="price" value="{{old("price" , $book->price)}}">
            <div> {{$errors->first("price", ":message")}} </div>
        </div>

        <div class="form-group">
            <label for="bookStock" class="col-md-3 col-form-label">Stock:</label>
            <input type="text" class="form-control" id="bookStock" name="stock" value="{{old("stock", $book->stock)}}">
            <div> {{$errors->first("stock", ":message")}} </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('book.homepage') }}" class="btn btn-danger"><i class="bi bi-arrow-left-circle-fill"></i> Go Back </a>
    </form>
</div>


<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection