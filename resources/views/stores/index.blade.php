<!DOCTYPE html>
<html>
<head>
    <title>store App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('stores') }}">View All stores</a></li>
        <li><a href="{{ URL::to('stores/create') }}">Create a store</a>
    </ul>
</nav>

<h1>All the stores</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Pickup Address</td>
        </tr>
    </thead>
    <tbody>
    @foreach($stores as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->pickup_address }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the store (uses the destroy method DESTROY /stores/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the store (uses the show method found at GET /stores/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('stores/' . $value->id) }}">Show this store</a>

                <!-- edit this store (uses the edit method found at GET /stores/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('stores/' . $value->id . '/edit') }}">Edit this store</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>