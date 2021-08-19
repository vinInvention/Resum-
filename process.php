<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Resume Website</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->
  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->  
      <?php
        if(isset($_POST['send'])) {
/* ----------------------------------------------------------About image variables below */
            $name = ($_POST['name']);
            $mail = ($_POST['email']);
            $subject = ($_POST['subject']);            
            $message = ($_POST['message']);
      }  
        ?>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2><?php echo $name. "  ". "thanks For Contacting Us"; ?> </h2> 
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" >
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control"
                          id="name" placeholder="Your name..." required="" value="<?php echo $name; ?>"/>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control"
                          id="email" placeholder="Your email..." required=""  value="<?php echo $mail; ?>" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" 
                          id="subject" placeholder="Subject..." required="" value="<?php echo $subject; ?>"/>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control"
                          id="message" placeholder="Your message..." required="" ><?php echo $message; ?></textarea>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    
  </body>
</html>