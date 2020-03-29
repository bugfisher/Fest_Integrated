<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Impulse 2020</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/loogo.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/loogo.png" height="50" width="50" alt="" title=""></a>
      </div>

      
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
            <?php 
            $cat = $_GET['category'];?>
          <h2>Upcoming Matches</h2>
          <p>List of Upcoming Matches of &nbsp;<?php echo $cat?> </p>
         
        </div>

        <?php
						include 'includes/config.php';
						$sel = "SELECT * FROM scores";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){

                            if(strcmp($rws['Category'],$cat) == 0 && $rws['Status'] == 0){
			?>
        <div class="row">
          <div class="col-md-6">
            <h2> <b>Match</b><?php echo '-'.$rws['Name'];?></h2>
            <h4> <?php echo  $rws['Player1'] ?> </h4>
            <h3>&nbsp;&nbsp;&nbsp;vs</h3>
            <h4> <?php echo $rws['Player2'] ?> </h4>
            <h5>Time- <?php echo $rws['Time'] ?></h5>
            <h6>Venue- <?php echo $rws['Venue'] ?></h6>

          </div>

          
          
        </div>
        <b><hr></b>
                            <?php } } ?>
      </div>

    </section>

    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
            <?php 
            $cat = $_GET['category'];?>
          <h2>Live Matches</h2>
          <p>List of Live Matches of &nbsp;<?php echo $cat?> </p>
         
        </div>

        <?php
						include 'includes/config.php';
						$sel = "SELECT * FROM scores";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){

                            if(strcmp($rws['Category'],$cat) == 0 && $rws['Status'] == 1){
			?>
        <div class="row">
          <div class="col-md-6">
          <h2> <b>Match</b><?php echo '-'.$rws['Name'];?></h2><img src="img/test1.gif" height="70" width="70">
            <h4> <?php echo  $rws['Player1'] ?>&nbsp;&nbsp;&nbsp;<?php echo  $rws['Score1'] ?></h4>
            <h4><?php echo $rws['Player2'] ?>&nbsp;&nbsp;&nbsp;<?php echo  $rws['Score2'] ?></h4>
            <h5><?php echo nl2br($rws['Result']) ?></h5>

          </div>

          
          
        </div>
        <b><hr></b>
                            <?php } } ?>
      </div>

    </section>

    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Results</h2>
          <p>List of Results of&nbsp; <?php echo $cat ?> </p>
        </div>
        <?php
						include 'includes/config.php';
						$sel = "SELECT * FROM scores";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){

                            if(strcmp($rws['Category'],$cat) == 0 && $rws['Status'] == 2) {

                                
			?>

        <div class="row">
          <div class="col-md-6">
            <h2> <b>Match</b><?php echo '-'.$rws['Name'];?></h2>
            <h4> <?php echo  $rws['Player1'] ?>&nbsp;&nbsp;&nbsp;<?php echo  $rws['Score1'] ?></h4>
            <h4><?php echo $rws['Player2'] ?>&nbsp;&nbsp;&nbsp;<?php echo  $rws['Score2'] ?></h4>
            <h5><?php echo nl2br($rws['Result']) ?></h5>

          </div>

         
          
        </div>
        <b><hr></b>
                            <?php } } ?>
      </div>

      <br><br>


<div class="col-md-6">
          
          <center><a href="index.php"><h5>=> GO BACK TO MAIN PAGE <=</h5></a></center>
          <center><a href="category.php"><h5>=> CHOOSE ANOTHER SPORT <=</h5></a></center>
            
          

        </div>

    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Tatyasaheb Kore Dental College</strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="#">VIVEK (Contact-9834008822)</a>
        </div>
      </div>
    </footer><!-- #footer -->
  
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>
  
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
  
  </html>
  
