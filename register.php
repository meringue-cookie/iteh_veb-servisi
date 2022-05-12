<?php
include 'action.php';

$title = basename(__FILE__, '.php');
include("parts/header.php");
?>

<body style = "font-family: Rosario;">

<div style="background-image: url('img/background.jpg');">

  <?php
  $navbarType = "sticky-top";
  include("parts/navbar.php");
  ?>

  <!-- Title -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div style="border-radius: 60px;" class="shadow p-3 mb-4 bg-white">
          <h1 class="text-center mt-2" style="border-radius: 60px; background-image: url('https://img.pixers.pics/pho(s3:700/PI/10/93/35/87/22/700_PI1093358722_a374e529400994f45d9501e48df0fbe5_5b7abe5d6a5aa_.,700,700,jpg)/wall-murals-seamless-geometric-memphis-pattern-in-retro-80s-style.jpg.jpg'); color: dark;" > <strong> Welcome to our Daycare </strong> </h1>
        </div>
        <!-- Alert -->
        <?php if (isset($_SESSION['response'])) { ?>
          <div class="alert alert-success <?= $_SESSION['res-type']; ?> alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b><?= $_SESSION['response']; ?></b>
          </div>
        <?php }
        unset($_SESSION['response']); ?>
        <!-- Alert end -->
      </div>
    </div>
    <!-- Title end -->


    <!-- Table -->
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="first_name" value="<?= $first_name; ?>" class="form-control" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
            <input type="text" name="last_name" value="<?= $last_name; ?>" class="form-control" placeholder="Enter your last name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter your e-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="Enter your phone number" required>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <input type="date" name="dates" value="<?= $dates; ?>" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
        <select name = "services" class="form-group form-control" required>
            <option value=""> Duration of Stay </option>
            <option value="Up to 2 Hours"> Up to 2 Hours </option>
            <option value="Half Day"> Half Day </option>
            <option value="Full Day"> Full Day </option>
          </select>
          </div>
          </div>
          <div class="form-group">
          <input type="text" name="species" id="autocomplete" class="form-control" placeholder="Enter animal species" required>
          </div>

          <script>
          var array= ["alpaca","cat","chicken","chinchilla","dog","duck","ferret","frog","goat","goose","goldfish","guinea-pig","hamster","hedgehog","llama","monkey","mouse","owl","parrot","pig","pigeon","rabbit","raccoon","salamander","scorpion","snail","snake","spider","toad","turtle"];
          $('#autocomplete').autocomplete({
            lookup: array
          });
          </script>

          <div class="form-group">
            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
            <input type="file" name="image" id="file" class="custom-file" >
            <label for="file"> Upload pet image </label>
            <br>
            <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
              <input style="border-radius: 60px;" type="submit" name="update" class="btn btn-info btn-block" value="Update info">
            <?php } else { ?>
              <input style="border-radius: 60px;" type="submit" name="add" class="btn btn-success btn-block" value="Submit Info">
            <?php } ?>
          </div>
        </form>
      </div>
      <!-- Table end -->
    </div>
  </div>
  </div>

  <?php
  $title = basename(__FILE__, '.php');
  include("parts/footer.php");
  ?>

</body>

</html>