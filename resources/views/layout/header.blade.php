<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route("book.homepage")}}">Home</a>
        <a class="navbar-brand" href="#">Books</a>
        <a class="navbar-brand" href="#">About</a>
        <form class="form-inline">
            <input class="form-control mr-2" type="text" placeholder="Search...">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <a href="{{ route("book.bookCreat") }}" class="btn btn-primary">CreatBook</a>
    </nav>
