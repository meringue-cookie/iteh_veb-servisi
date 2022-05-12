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
        <?php
        $curl = curl_init('http://localhost/zadatak3-veb-servisi/api/data');

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $odgovor = curl_exec($curl);
        $podaci = json_decode($odgovor);
        curl_close($curl);
        ?>
        <div style="border-radius: 60px;" class="shadow p-3 mb-4 bg-white">
          <h1 class="text-center mt-2" style="border-radius: 60px; background-image: url('https://img.pixers.pics/pho(s3:700/PI/10/93/35/87/22/700_PI1093358722_a374e529400994f45d9501e48df0fbe5_5b7abe5d6a5aa_.,700,700,jpg)/wall-murals-seamless-geometric-memphis-pattern-in-retro-80s-style.jpg'); color: dark;"> <strong> Your Reservation </strong> </h1>
        </div>
        <!-- Alert -->
        <?php if (isset($_SESSION['response'])) { ?>
          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b><?= $_SESSION['response']; ?></b>
          </div>
        <?php }
        unset($_SESSION['response']); ?>
        <!-- Alert end -->
      </div>
    </div>
  </div>
    <!-- Title end -->

    <!-- Table -->
    <div class="col-md-12">

      <table class="table table-default table-hover">
        <thead class="text" style="color: dark;">
          <tr>
            <th>#</th>
            <th>Photo</th>
            <th>First name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Phone number</th>
            <th>Date</th>
            <th>Duration of Stay</th>
            <th>Animal Species</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="text" style="color: dark;">
          <?php foreach ($podaci as $row) { ?>
            <tr>
              <td><?= $row->id; ?></td>
              <td><img src="<?= $row->photo; ?>" width="30"></td>
              <td><?= $row->first_name; ?></td>
              <td><?= $row->last_name; ?></td>
              <td><?= $row->email; ?></td>
              <td><?= $row->phone; ?></td>
              <td><?= $row->dates; ?></td>
              <td><?= $row->services; ?></td>
              <td><?= $row->species; ?></td>
              <td>
              <!-- Modal <a class="badge badge-info p-2 text-light" data-toggle="modal" data-target="#myModal">View</a> -->
                <a href="details.php?details=<?= $row->id; ?>" class="badge badge-info p-2">&nbsp View &nbsp</a> |
                <a href="register.php?edit=<?= $row->id; ?>" class="badge badge-warning p-2 text-light">&nbsp Edit &nbsp</a> |
                <a href="action.php?delete=<?= $row->id; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want to delete this?');">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- Table end -->

  <?php
  $title = basename(__FILE__, '.php');
  include("parts/footer.php");
  ?>
  
</body>

</html>