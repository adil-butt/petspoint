@extends('layout.app')
@section('content')
    <!-- slideshow -->
    <div class="slide">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img class="id12" src="honda models/1477599459_bmw-m2-najam-rent.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
      <div class="item active">
        <img src="honda models/0-330230.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
      <div class="item">
        <img src="honda models/1471250361_audi-r8-rent-najam-rijeka-opatija-croatia.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
<!-- Heading -->
<div class="container text-center">    
  <h2><b>Welcome To Autocars</b></h2>
    <h3>Auto cars is wide range of car collections and Trucks with modern equipments</h3>
    <p>...</p>
    <h2 style=" text-align:left;">Latest Products</h2>
  <div class="row">
    <div class="col-md-4">
      <a href="products" target="_blank"><img src="honda models/nissan.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p><b>Nissan 2017 model</b></p>
    </div>
    <div class="col-md-4"> 
      <a href="products" target="_blank"><img src="honda models/mercedes.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p><b>Mercedes 2017 model</b></p>    
    </div>
    <div class="col-md-4"> 
      <a href="products" target="_blank"><img src="honda models/audi.jpg" class="img-responsive" style="height:200px;" alt="Image"></a>
      <p><b>Audi 2017 model</b></p>    
    </div>
  </div>
</div><br><!--jquery and ajax attach for slider-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
@endsection