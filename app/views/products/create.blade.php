<!-- app/views/product/create.blade.php -->

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
    <a class="navbar-brand" href="{{ URL::to('products') }}">product Alert</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="{{ URL::to('products') }}">View All product</a></li>
    <li><a href="{{ URL::to('products/create') }}">Create a product</a>
  </ul>
</nav>

<h1>Create a product</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul( $errors->all() ) }}

{{ Form::open( array('url' => 'products', 'files' => true) ) }}

  <div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('image', 'Image') }}
    {{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
  </div>

  {{ Form::submit('Create the product!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>