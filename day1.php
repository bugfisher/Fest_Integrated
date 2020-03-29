<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
          <h2>Day one</h2>
          <p>LIGHT'S CAMERA ACTION</p>
        </div>

        <div class="row">
          <div class="col-md-6">
              <h2>First Year</h2>
            <img src="img/munna.jpg" alt="Speaker 1" class="img-fluid">
          </div>
          

          <div class="col-md-6">
            <div class="details">
                <br>
              <center><h3>MUNNA BHAI MBBS</h3></center>
              <p><b>FUN FACT-</b> Film was a turning point for Arshad Warsi who career was going no where.After the film he started getting many offers in comic roles.Before signing this film he said he had no work for three years.</p>

              
              <b><hr></b>
            </div>
          </div>
          
        </div>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h2>Second Year</h2>
              <img src="img/ddlj.jpg" alt="Speaker 1" class="img-fluid" >
            </div>
            
  
            <div class="col-md-6">
              <div class="details">
                  <br>
                <center><h3>DDLJ</h3></center>
                <p><b>FUN FACT-</b> Shah Rukh thought the character of Raj was a pansy! His exact words (back in 1994) were, “It’s a role of a wimp. I feel like a wimp. I feel like a pansy.” </p>
                
                <b><hr></b>
              </div>
            </div>
            
          </div>
      

      <br>

        <div class="row">
            <div class="col-md-6">
                <h2>Third Year</h2>
              <img src="img/chich.jpg" alt="Speaker 1" class="img-fluid" >
            </div>
            
  
            <div class="col-md-6">
              <div class="details">
                  <br>
                <center><h3>CHHICHHORE</h3></center>
                <p><b>FUN FACT- </b>The director NITESH TIWARI said, “The names you have seen in the poster originate from my hostel times.</p>
                
                <b><hr></b>
              </div>
            </div>
            
          </div>

          <br>

        <div class="row">
            <div class="col-md-6">
                <h2>Forth Year</h2>
              <img src="img/bhool.jpg" alt="Speaker 1" class="img-fluid" >
            </div>
            
  
            <div class="col-md-6">
              <div class="details">
                  <br>
                <center><h3>BHOOL BHULAIYAA</h3></center>
                <p><b>FUN FACT- </b>Bhool Bhulaiyya is the proper and official remake of the Malayalam film Manichitratazhu (The Golden Lock). The highlight of this film was that there was no ghost in the story.</p>
                
                <b><hr></b>
              </div>
            </div>
            
          </div>
          <br>

          <div class="row">
              <div class="col-md-6">
                  <h2>Interns</h2>
                <img src="img/border.jpg" alt="Speaker 1" class="img-fluid" >
              </div>
              
    
              <div class="col-md-6">
                <div class="details">
                    <br>
                  <center><h3>BORDER</h3></center>
                  <p><b>FUN FACT- </b> Salman Khan, Aamir Khan, Akshay Kumar, Ajay Devgn and Saif Ali Khan were all approached for the role of Lieutenant Dharamvir, which was finally played by newcomer Akshay Khanna. </p>
                  
                  <b><hr></b>
                </div>
              </div>
              
            </div>

            <br>

            <div class="row">
                <div class="col-md-6">
                    <h2>PG's</h2>
                  <img src="img/sholay.jpg" alt="Speaker 1" class="img-fluid" >
                </div>
                
      
                <div class="col-md-6">
                  <div class="details">
                      <br>
                    <center><h3>SHOLAY</h3></center>
                    <p><b>FUN FACT- </b>Actor Amjad Ali Khan who played the iconic role of Gabbar was almost dropped from the film, losing his role to Danny Denzongpa. The scriptwriter Javed Akhtar wasn’t very convinced by Amjad’s voice. He only features in nine scenes all over the movie.</p>
                    
                    <b><hr></b>
                  </div>
                </div>
                
              </div>

              <br>

              <?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cultural where Day='Day-1'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){

                            
			?>

              <div class="col-md-6">
                  <div class="details">
                      <br>
                    <center><h1>WINNER</h1></center>
                    <h3><?php echo nl2br($rws['Winner']) ?></h3>
                    
                    <b><hr></b>
                  </div>
                </div>
                
              </div>

              <?php }?>

           













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