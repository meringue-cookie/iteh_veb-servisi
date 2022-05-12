<?php
include 'action.php';

$title = basename(__FILE__, '.php');
include("parts/header.php");
?>

<body style = "font-family: Rosario; color: dark;">
<div style="background-image: url('img/background.jpg');">
    <?php
      $navbarType = "sticky-top";
      include("parts/navbar.php");
    ?> 

    <div style="border-radius: 60px;" class="container col-md-6  mt-2 bg-light p-4">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                 <div style="border-radius: 60px;" class="shadow p-1 mb-4 bg-white">
                     <h1 class="text-center mt-2" style="border-radius: 60px; background-image: url('https://img.pixers.pics/pho(s3:700/PI/10/93/35/87/22/700_PI1093358722_a374e529400994f45d9501e48df0fbe5_5b7abe5d6a5aa_.,700,700,jpg)/wall-murals-seamless-geometric-memphis-pattern-in-retro-80s-style.jpg.jpg');" > <strong> About </strong> </h1>
                 </div>
            </div>
        <!-- Title end -->
        
        <div class="row justify-content-center">
          <div class="text-center">
            <img src="<?= $vphoto; ?>" width="300" class="img-thumbnail">
          </div>
      </div>
      
      <div class="row">
        <div class="col-md-6"><br>
            <div class="form-group">
              <h4 class="text p-2 text-justify"> First name: <?= $vfirst_name; ?> </h4>
              <h4 class="text p-2 text-justify"> E-mail: <?= $vemail; ?> </h4>
              <h4 class="text p-2 text-justify"> Service: <?= $vservices; ?> </h4>
              <h4 class="text p-2"> Animal Species: <?= $vspecies; ?> </h4>
            </div>
          </div>
        <div class="col-md-6"> <br>
          <div class="form-group">
              <h4 class="text p-2 text-justify"> Last name: <?= $vlast_name; ?> </h4>
              <h4 class="text p-2 text-justify"> Phone: <?= $vphone; ?> </h4>
              <h4 class="text p-2 text-justify"> Date: <?= $vdates; ?> </h4>
            </div>
          </div>
        </div>
    </div>
    <br>
    <h3>- More cute pictures of <?php echo $vspecies; ?>s -</h3>
    <div id="javniServis">

    </div>
 
</body>

<script>
    $.ajax({
        type: "GET",  
        url: 'pictures.php',
        data: { specie: "<?php echo $vspecies; ?>" },
        success: function (data) {
            $("#javniServis").html(data);
        }
    });
</script>

</html>