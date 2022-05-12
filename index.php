<?php
  $title = basename(__FILE__, '.php');
  include("parts/header.php");
?>

<body style = "font-family: Rosario;">

  <?php
  $navbarType = "fixed-top";
  include("parts/navbar.php");
  ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: linear-gradient(rgba(21, 21, 20, 0) 0px, rgba(21, 21, 28, 0.1) 40%, rgba(21, 21, 28, 0.3) 55%, rgba(21, 21, 28, 0.61) 85%, rgb(21, 21, 28)), url(img/2.jpg)">
        <div class="carousel-caption d-md-block">
          <h2>Play · Relax · Rest</h2>
          <p class="lead">At FuzzyWuzzy, we do our best to meet all pet lovers’ needs. We provide pet daycare, boarding, grooming and pet supplies. FuzzyWuzzy has a total area of 3200 sq. ft, including 1700 sq ft indoor dog run 500 square ft outdoor playground area, and a sweet comfy cat area. We promise to provide the most professional and considerate service for your pets.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: linear-gradient(rgba(21, 21, 28, 0) 0px, rgba(21, 21, 28, 0.1) 40%, rgba(21, 21, 28, 0.3) 55%, rgba(21, 21, 28, 0.61) 85%, rgb(21, 21, 28)), url(img/4.jpg)">
        <div class="carousel-caption d-md-block">
          <h2>About us</h2>
          <p class="lead">Ms. Jeca is the founder of FuzzyWuzzy Pet Daycare. With a lot of years of experience in the area of animal health, she has extensive knowledge of animal caring and business management. As a pet lover herself Jeca is committed to provide a lovely home for your pets.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: linear-gradient(rgba(21, 21, 28, 0) 0px, rgba(21, 21, 28, 0.1) 40%, rgba(21, 21, 28, 0.3) 55%, rgba(21, 21, 28, 0.61) 85%, rgb(21, 21, 28)),  url(img/3.jpg)">
        <div class="carousel-caption d-md-block">
          <h2>Our Services</h2>
          <p class="lead">We take care of your beloved pet with love and passion! That’s all! We provide various plans for you to choose from.  From few hours to weeks, we will make FuzzyWuzzy your pet’s second home. We will do our best to make sure your pets have a comfort and safe stay.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script>
    $.fn.cornerpopup({
    });
  </script>

</body>

</html>