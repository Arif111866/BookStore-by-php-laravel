@extends('layout/main')
@section('main-section')

<div class="container mt-4">
    <table class="table table-bordered text-center">
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
            <tr>
                <td>1</td>
                <td>Book A</td>
                <td>Ariful Islam</td>
                <td>10</td>
                <td>$19.99</td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-success">View</button>
                        <div class="mx-1"></div> <!-- Small gap -->
                        <button class="btn btn-info">Edit</button>
                        <div class="mx-1"></div> <!-- Small gap -->
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>



@endsection