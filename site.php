<?php


$message_sent=false;
    if(isset($_POST['email'])&& $_POST['email']!=''){

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            //submit the form
            $userName=$_POST['name'];
            $userEmail=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
        
            $to="finalement2020@protonmail.com";
            $body="";
            $body .="From: ".$userName. "\r\n";
            $body .="From: ".$userEmail. "\r\n";
            $body .="From: ".$message. "\r\n";
        
            mail($to,$subject,$body);
            $message_sent=true;

        }
        else{
            $invalid_class_name="form-invalid";
        }


    }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-wi dth, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Third party plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
   
    <link href="css/styles.css" rel="stylesheet" />
    
  <body id="page-top">
    <!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Adventure</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Github</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"
                >Projects</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" id="home">
      <div class="container h-100">
        <div
          class="row h-100 align-items-center justify-content-center text-center"
        >
          <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">
              The Adventure begins
            </h1>
            <!--<hr class="divider my-4" />-->
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5"></p>
            <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"
              >Find Out More</a
            >-->
          </div>
        </div>
      </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">About Me</h2>
            <hr class="divider light my-4" />
            <p class="text-white-50 mb-4">
              Start Bootstrap has everything you need to get your new website up
              and running in no time! Choose one of our open source, free to
              download, and easy to use themes! No strings attached!
            </p>
            <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services"
              >Get Started!</a
            >-->
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->

    <section class="page-section" id="services">
      <div class="container">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider my-4" />
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <i class="fas fa-4x fa-gem text-primary mb-4"></i>
              <h3 class="h4 mb-2">Sturdy Themes</h3>
              <p class="text-muted mb-0">
                Our themes are updated regularly to keep them bug free!
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
              <h3 class="h4 mb-2">Up to Date</h3>
              <p class="text-muted mb-0">
                All dependencies are kept current to keep things fresh.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <i class="fas fa-4x fa-globe text-primary mb-4"></i>
              <h3 class="h4 mb-2">Ready to Publish</h3>
              <p class="text-muted mb-0">
                You can use this design as is, or you can make changes!
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <i class="fas fa-4x fa-heart text-primary mb-4"></i>
              <h3 class="h4 mb-2">Made with Love</h3>
              <p class="text-muted mb-0">
                Is it really open source if it's not made with love?
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio-->

    <section class="page-section" id="portfolio">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">My Projects</h2>
            <hr class="divider my-4" />
            <p class="text-muted mb-5">
              Here are my projects!
            </p>
          </div>
        </div>
        <div class="container-fluid p-0">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-10 text-center">
              <a
                class="portfolio-box"
                href="assets/img/portfolio/fullsize/1.jpg"
              >
                <img
                  class="img-fluid"
                  src="assets/img/portfolio/thumbnails/1.jpg"
                  alt=""
                />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Project 1</div>
                  <div class="project-name">Project 1</div>
                </div>
              </a>
              <br>

            </div>
            <div class="col-lg-5 col-md-10 text-center">
              <a
                class="portfolio-box"
                href="assets/img/portfolio/fullsize/2.jpg"
              >
                <img
                  class="img-fluid"
                  src="assets/img/portfolio/thumbnails/2.jpg"
                  alt=""
                />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project 2</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action-->
    <!--<section class="page-section bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a
          class="btn btn-light btn-xl"
          href="https://startbootstrap.com/themes/creative/"
          >Download Now!</a
        >
      </div>
    </section>-->

    <!-- Contact-->
    
    <section class="page-section" id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">Let's Get In Touch!</h2>
            <hr class="divider my-4" />
            <p class="text-muted mb-5">
              If you want to contact me, please leave a message and your email.
            </p>
            <?php
    if($message_sent):
    ?>
    <section class="page-section" id="contact">

    <div class="col-lg-8 text-center">
            <h3 class="mt-0">
    Thanks, we'll be in touch!</h3>
    </div>
    </section>

    <?php
    else:   
    ?>
            <form method="POST" class="form" action="site.php">
              <div class="row" >
                <span class="col-12 col-sm-2" id="name">Name</span>
                <input class="col-12 col-sm-10" type="text" name="name" required>                
              </div>
              <br>
              <div class="row" >
              <span class="col-12 col-sm-2" id="email">Email</span>
              <input class="col-12 col-sm-10" type="email" name="email" required>
               
              </div>
              <br>
              <div class="row" >
              <span class="col-12 col-sm-2" id="subject">Subject</span>
              <input class="col-12 col-sm-10" type="text" name="subject" required>
               
              </div>
              <br>
              <div class="row" >
              <span class="col-12 col-sm-2"id="message">Message</span>
              <textarea class="col-12 col-sm-10" name="message" required></textarea>
              </div>
              <br>
              <div class="text-center col-12">
              <input class="btn btn-primary btn-xl" type="submit" value="Send">
              </div>
          </form>
   
          </div>
          </div>  
        </div>
    <?php
    endif;
    
    ?>
         
          
         
  
    </section>
   
    <!-- Footer-->
    <footer class="bg-light py-5">
      <div class="container">
        <div class="small text-center text-muted">
          Copyright © 2020 - Xin
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    
  </body>
</html>
