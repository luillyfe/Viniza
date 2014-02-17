<!DOCTYPE HTML>
<html>

<head>
  <title>Juan Valdez</title>
  <meta name="description" content="Juan Valdez" />
  <meta name="keywords" content="Juan Valdez, Comprar Cúcuta" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    
    <div id="top_split">	
	
	<header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Juan Valdez<span class="logo_colour">:)</span></a></h1>
          <h2>Compra on-line</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="#">Home</a></li>
        </ul>
      </nav>  
	</header>

	<div id="site_content" >
		{{ Form::open(array( 'route' => array ('products.update', $product->id),   
                            'files' => 'true', 'method' => 'PUT' )) }}
      {{ Form::text('productname', $product->productname) }}<p></p>
      {{ Form::text('price', $product->price) }}<p></p>
      <?php echo "<img src='../".$product->image."' witdh=150px height=150px ><p></p>"  ?>
      {{ Form::file('image') }}<p></p>
      {{ Form::submit('Actualizar') }}
    {{ Form::close() }}

    <a href="../index" >Volver</a>
	</div>  	
	
    </div>
    <footer>
      <p> Copyright &copy; CSS3_gallery_grey | 
          <a href="http://fotogrph.com/">Images</a> | 
          <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
