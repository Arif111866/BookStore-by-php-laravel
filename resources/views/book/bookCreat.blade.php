
@extends('layout/main')
@section('main-section')

<div class="container mt-4">
    <form>
        <div class="form-group row">
            <label for="bookId" class="col-md-3 col-form-label">ID:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookId" name="bookId">
            </div>
        </div>

        <div class="form-group row">
            <label for="bookTitle" class="col-md-3 col-form-label">Title:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookTitle" name="bookTitle">
            </div>
        </div>

        <div class="form-group row">
            <label for="bookAuthor" class="col-md-3 col-form-label">Author:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookAuthor" name="bookAuthor">
            </div>
        </div>

        <div class="form-group row">
            <label for="bookISBN" class="col-md-3 col-form-label">ISBN:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookISBN" name="bookISBN">
            </div>
        </div>

        <div class="form-group row">
            <label for="bookPrice" class="col-md-3 col-form-label">Price:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookPrice" name="bookPrice">
            </div>
        </div>

        <div class="form-group row">
            <label for="bookStock" class="col-md-3 col-form-label">Stock:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="bookStock" name="bookStock">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection