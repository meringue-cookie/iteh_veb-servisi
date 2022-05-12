<?php
include 'action_2.php';

$title = basename(__FILE__, '.php');
include("parts/header.php");
?>

<body style = "font-family: Rosario;">

<div style="background-image: url('img/background.jpg');">

    <?php
    $navbarType = "sticky-top";
    include("parts/navbar.php");
    ?>

    <script>
        function mapsSelector() {
            window.open("https://www.google.com/maps/dir//Faculty+of+Organizational+Sciences,+Jove+Ili%C4%87a,+Belgrade/@44.7715212,20.4730663,17.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x475a70576248bf79:0xadaf5cff042d3bd0!2m2!1d20.4752276!2d44.7726584");
        } 
    </script>

    <script type="text/javascript">
         $(document).ready(function() {
         $("#messages").emojioneArea();
        });
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div style="border-radius: 60px;" class="col-md-8 mt-3 bg-light p-4">
         <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                 <div style="border-radius: 60px;" class="shadow p-1 mb-4 bg-white">
                     <h1 class="text-center mt-2" style="border-radius: 60px; background-image: url('https://img.pixers.pics/pho(s3:700/PI/10/93/35/87/22/700_PI1093358722_a374e529400994f45d9501e48df0fbe5_5b7abe5d6a5aa_.,700,700,jpg)/wall-murals-seamless-geometric-memphis-pattern-in-retro-80s-style.jpg'); color: dark;" > <strong> Send us a Message </strong> </h1>
                 </div>
            </div>
    </div>
        <!-- Title end -->
                
                <br>    
                <form id="contact-form" method="post" role="form">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">First name *</label>
                                            <input id="first_name" type="text" name="first_name" class="form-control" placeholder="Enter your first name" required="required" data-error="First name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Last name *</label>
                                            <input id="last_name" type="text" name="last_name" class="form-control" placeholder="Enter your last name" required="required" data-error="Last name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message *</label>
                                            <textarea id="messages" name="messages" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>         
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input style="border-radius: 60px;" type="submit" name="add" class="btn btn-success" btn-send onclick="return confirm('Message sent!');" value="Send message">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-style: italic; text-align:end;" class="text-muted"><strong>*</strong> These fields are required.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                          <div class="col-md-6">
                            <p>You can also contact us at: +381 663992919</p>
                            <p>Where to find us: &nbsp <img style="cursor: pointer; width:30px; height:30px;" onclick="mapsSelector()" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/747/maps-icon.png" /></p>                                        
                        </div>
            </div>
        </div>
    </div>

<?php
  $title = basename(__FILE__, '.php');
  include("parts/footer.php");
?>

</body>
