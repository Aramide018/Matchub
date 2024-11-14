<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMOOTH TRAVELS AND TOURS</title>
    <!--Mobile View-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Tab Image Icon-->
    <link rel="icon" href="images/">

    <!-- jQuery -->
    <script src='jquery-3.1.1.min.js' type='text/javascript'></script>
    <script src='jquery-ui.min.js' type='text/javascript'></script>
    <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
    <script src="popper.min.js">

    </script>



    <link href='font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap1.min.css">
    <!--Bootstrap-->
    <scrip src="bootstrap.min.js"></script>
</head>
<body style="background-color: #95c8d8;">

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    
    
    
     
    <style>
        *{
            font-style: italic;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
  
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  
      /* GLOBAL STYLES
      --------------------------------------------- */
      /* Padding below the footer and lighter body text */
  
   
  
      /* CUSTOMIZE THE CAROUSEL
      -------------------------------------------- */
  
      /* Carousel base class */
      .carousel {
        margin-bottom: 4rem;
      }
  
      /* Since positioning the image, we need to help out the caption */
      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }
  
      /* Declare heights because of positioning of img element */
      .carousel-item {
        height: 32rem;
      }
  
      .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
      }
  
  
      /* MARKETING CONTENT
  -------------------------------------------------- */
  
      /* Center align the text within the three columns below the carousel */
      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }
  
      .marketing h2 {
        font-weight: 400;
      }
  
      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }
  
  
      /* Featurettes
  ------------------------- */
  
      .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
      }
  
      /* Thin out the marketing headings */
      .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
      }
  
  
      /* RESPONSIVE CSS
  -------------------------------------------------- */
  
      @media (min-width: 40em) {
  
        /* Bump up size of carousel content */
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }
  
        .featurette-heading {
          font-size: 50px;
        }
      }
  
      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }
    </style>
  
  
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

  
  
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/lisa-gageler-AkQ93JGFXaQ-unsplash.jpg" width="100%" height="100%"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></img>
  
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Tanzania</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                  metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Visit today &rightarrow;</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/frank-ching-ibpO2HAPaPI-unsplash.jpg" class="bd-placeholder-img" width="100%" height="100%"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></img>
  
            <div class="container">
              <div class="carousel-caption">
                <h1>Italy</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                  metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Visit today &rightarrow;</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Desert.jpg" class="bd-placeholder-img " width="100%" height="100%"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></img>
  
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Sahara</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                  metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Visit today &rightarrow;</a></p>
              </div>
            </div>
          </div>
        </div>
         
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  
  
      <!-- Marketing messaging and featurettes
    ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
  
      
  
        <!-- START THE FEATURETTES -->
  
        <hr class="featurette-divider">
        <h1 style="font-size: 90px; color: white">Special Packages<span class="fa fa-package"></span></h1>
  
        <div class="row featurette container">
          <div class="col-md-7">
            <h2 class="featurette-heading text-light">Morrocco <span class="text-light">It’ll blow your mind.</span>
            </h2>
            <p class="lead text-light">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
              semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.</p>
              <button class="btn btn-primary">Book Now</button>
              <br>
          </div>
          <div class="col-md-5">
            <img src="img/faruk-tokluoglu-ByYteB_YGW4-unsplash.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="800"
              height="300" 
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              
            </img>
  
          </div>
        </div>
  
        <hr class="featurette-divider">
  
        <div class="row featurette container">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading text-light" >Oh yeah, it’s that good. <span class="text-light"> Visit India and See for yourself.</span></h2>
            <p class="lead text-light">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
              semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.</p>
              <button class="btn btn-primary">Book Now</button>
              
          </div>
          <div class="col-md-5 order-md-1">
            <img src="img/faruk-tokluoglu-z6hhS_uvkXw-unsplash.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
              height="300"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
               
              
        </img>
  
          </div>
        </div>
  
        <hr class="featurette-divider">
  
        <div class="row featurette container">
          <div class="col-md-7">
            <h2 class="featurette-heading text-light">And lastly, this one. <span class="text-light">Berlin</span></h2>
            <p class="lead text-light">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
              semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.</p>
              <button class="btn btn-primary">Book Now</button>
          </div>
          <div class="col-md-5">
            <img src="img/stanislav-rozhkov-g7PNOPXHwZI-unsplash.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
              height="500"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          
            </img>
  
          </div>
        </div>
  
        <hr class="featurette-divider">
        
  
        <!-- /END THE FEATURETTES -->
  
      </div><!-- /.container -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
    
        <?php   
        echo "<p>Copyright &copy; 2021-" . date("Y/m/d") . " Aramide</p>";
        ?>
  
  </footer>

    </body>
</html>
