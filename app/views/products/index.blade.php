<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <title>De compras en, Juan Valdez</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ URL::to('products') }}">Juan Valdez</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="{{ URL::to('products') }}">View All products</a></li>
    <li><a href="{{ URL::to('products/create') }}">Create a product</a>
  </ul>
</nav>

<h1>Control de productos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Price</td>
      <td>Image</td>
      <td>Actions</td>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $key => $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->productname }}</td>
      <td>{{ $value->price }}</td>
      <td><img src=public/{{ $value->image }} width="100px" height="80px" ></td>

      <!-- we will also add show, edit, and delete buttons -->
      <td>

        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
        <!-- we will add this later since its a little more complicated than the other two buttons -->

        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
        <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Ver</a>

        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
        <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Actualizar</a>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
</body>
</html>