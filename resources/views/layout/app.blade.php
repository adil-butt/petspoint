<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auto cars</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/lab.css') }}" rel="stylesheet" type="text/css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="padding-bottom:10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="honda models/logo.png" width="250" height="70">
    </div>
      <div class="nav navbar-nav navbar-right">
      <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
      <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
      <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
      <a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
      </div>
  </div>
</nav>

<nav class="navbar nav-id">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
					<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/products">Products</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/admin">admin</a>
				</li>
      </ul>
    </div>
  </div>
</nav>    

@yield('content')


<div class="container text-center footer">
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <h3><b>Navigate</b></h3>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      
        <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <h3><b>Contact</b></h3>
          <li>25 block b valancia scheme lahore</li>
          <li>+923204830058</li>
          <li>autocar@gmail.com</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
        <h3><b>BRANDS NAMES</b></h3>
        <li>BMW</li>
        <li>AUDI</li>
        <li>HONDA</li>
        <li>TOYOTA</li>        
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <h3><b>Follow Us</b></h3>
        <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
        <a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
        </ul>
      </div>  
    </div>
  </div>
</div>    
</body>
</html>


















