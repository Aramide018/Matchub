<?php
session_start();
include "isseat.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EATLY</title>
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
    <script src="bootstrap.min.js"></script>
</head>

<body>
    <!-- <div style="background-color:rgb(182, 25, 182); box-shadow: 4px 4px 8px rgba(0,0,0,0.5); "> -->
    <div style="background: url(img/ahtziri-lagarde-fwWNzqif624-unsplash.jpg);background-size:cover;background-position:center center;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="navbar-nav ">
                    <!--Nav bar to the right-->
                    <h5 class="text-warning" style="font-size: 25px;font-weight: bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                        Eatly</h5>

                </div>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ml-auto" style="font-weight: bold;gap:50px;">
                        <a href="" class="nav-item nav-link active" style="color:white">Home</a>
                        <a href="" class="nav-item nav-link " style="color:white">Order</a>
                        <a href="" class="nav-item nav-link" style="color:white">Menu</a>
                        <a href="" class="nav-item nav-link" style="color:white">About</a>
                        <?php
                        if (isset($_SESSION['eat'])) {

                        ?>
                        <a href="logout.php" class="nav-item nav-link btn-md btn-warning text-dark" style="border-radius: 10px; padding: 7px 17px 7px 17px;">logout</a>
                        <?php
                        } else {
                            ?>
                             <a href="signeat.php" class="nav-item nav-link btn-md btn-warning text-dark" style="border-radius: 10px; padding: 7px 17px 7px 17px;">Sign up</a>
                            <?php 
                        }
                        ?>


                       

                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 class="text-light"><span style="font-size: 70px; font-family:sans-serif">Changing</span> <br>
                        <span style="font-size: 65px; font-family: sans-serif;">your</span> <span class="text-warning ml-2" style="font-size:65px; font-family: sans-serif;">eating</span><br><span style="color: white; font-family:sans-serif;font-size: 65px;">habits</span>
                    </h3>

                    <p style="font-weight: bold; font-family:sans-serif ;" class="details">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aut, suscipit! Libero in alias doloribus doloremque itaque dolores
                        totam unde aliquid.</p>

                    <a href="#"><button class="btn btn-warning win" style="width: 150px; height:50px;">Explore
                            &rightarrow;</button></a>
                    <a href="#" class="text-light mx-5" style="font-size: 20px; text-decoration:none; font-family:sans-serif">order now</a>
                </div>
                <!-- <div class="col-md-6">
                    <img src="html/images/img-1.png" alt="kkk" class="img-fluid" max-width="100%" style="border-radius: 70px; height: 500px;">
                </div> -->
            </div>
        </div>
        <br>
        <div class="py-3" style="background: #d8a3f3;">
            <h3 class="ml-5" style="font-size: 40px; color: purple;font-family:Verdana, Geneva, Tahoma, sans-serif;">
                emersion <span class="ml-5">HERBALIFE</span></h3>
        </div>
    </div>
    <br><br>
    <h3 style="font-family: Georgia; font-weight:bold; color:purple;" class="container">Our Best Programs</h3>
    <br><br>

    <div class="container" style="background-color: purple; border-radius: 30px; box-shadow: 4px 4px 8px rgba(255, 190, 190, 0.5);">

        <div class="row pt-5 mx-0">
            <div class="col-3 px-0">
                <div class=" text-center p-4">
                    <h4 class="text-white">Healthy Recipe</h4>
                    <!-- <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6> -->
                    <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A sapien</p>
                </div>
            </div>
            <div class="col-3 px-0">
                <div class=" text-center p-4">
                    <h4 class="text-white">Healthy Meals</h4>
                    <!-- <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6> -->
                    <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A sapien</p>

                </div>
            </div>
            <div class="col-3 px-0">
                <div class=" text-center  p-4 bg-warning">
                    <h4 class="text-white">Healthy Eating</h4>
                    <!-- <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6> -->
                    <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A sapien</p>

                </div>
            </div>
            <div class="col-3 px-0">
                <div class=" text-center p-4">
                    <h4 class="text-white">Healthy Lifes</h4>
                    <!-- <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6> -->
                    <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A sapien</p>

                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="images/gallary-6.jpg" style="object-fit: cover; border-radius:5%">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h3 style="color: purple; font-family: sans-serif; font-weight: bolder;">Our Value To Help You
                        </h3>
                    </div>
                    <p style="font-weight: bold;">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor
                        diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam dia ghy ihu yu</p>

                    <div class="row g-5">
                        <div class="col-sm-6 col-md-6">
                            <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #f6e7ff; border-radius: 20px; box-shadow: 4px 4px 8px rgba(255, 168, 229, 0.5)">
                                <div class="service-icon mb-4">
                                    <i class="fa fa-2x fa-user-md text-white"></i>
                                </div>
                                <h4 class="mb-3" style="font-weight: bolder; color:purple; font-family:sans-serif">
                                    Healthy Recipe</h4>
                                <p class="m-3" style="font-weight: bold;">Kasd dolor no lorem nonumy sit labore tempor
                                    at justo rebum rebum stet, justo elitr dolor amet sit</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #f6e7ff; border-radius: 20px; box-shadow: 4px 4px 8px rgba(255, 168, 229, 0.5)">
                                <div class="service-icon mb-4">
                                    <i class="fa fa-2x fa-procedures text-white"></i>
                                </div>
                                <h4 class="mb-3" style="font-weight: bolder; color:purple; font-family:sans-serif">
                                    Healthy Meals</h4>
                                <p class="m-3" style="font-weight: bold;">Kasd dolor no lorem nonumy sit labore tempor
                                    at justo rebum rebum stet, justo elitr dolor amet sit</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #f6e7ff; border-radius: 20px; box-shadow: 4px 4px 8px rgba(255, 168, 229, 0.5)">
                                <div class="service-icon mb-4">
                                    <i class="fa fa-2x fa-pills text-white"></i>

                                </div>
                                <h4 class="mb-3" style="font-weight: bolder; color:purple; font-family:sans-serif">
                                    Healthy Eating</h4>
                                <p class="m-3" style="font-weight: bold;">Kasd dolor no lorem nonumy sit labore tempor
                                    at justo rebum rebum stet, justo elitr dolor amet sit</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #f6e7ff; border-radius: 20px; box-shadow: 4px 4px 8px rgba(255, 168, 229, 0.5)">
                                <div class="service-icon mb-4">
                                    <i class="fa fa-2x fa-pills text-white"></i>
                                </div>
                                <h4 class="mb-3" style="font-weight: bolder; color:purple; font-family:sans-serif">
                                    Healthy Life</h4>
                                <p class="m-3" style="font-weight: bold;">Kasd dolor no lorem nonumy sit labore tempor
                                    at justo rebum rebum stet, justo elitr dolor amet sit</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
    </div>
    </div>

    <br><br>
    <div class="container">

        <div class="container-fluid  my-5 py-4" style="background: purple; border-radius:30px;box-shadow:white;">
            <div class="container py-5">
                <div class="text-center mx-auto mb-4" style="max-width: 500px;">
                    <h1 class="mb-3 text-light" style="font-weight: bolder; font-family:sans-serif">Get Started With <span class="text-warning">Eatly</span></h1>
                    <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit.</h5>
                    <br><br>
                    <div class="btn btn-lg btn-warning" style="font-weight: bold; border-radius:10px;">Get Started</div>
                </div>

            </div>
        </div>
    </div>

    <br><br>
    <div class="container">

        <h3 style="font-family:Georgia; font-weight:bolder;color:purple">Try Our Healthy Menu</h3>
        <p style="font-weight: bold;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Quam fugiat corrupti itaque quas! Repellendus architecto error unde velit </p>
    </div>
    <br>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <a href="eatmenu.html">
                            <div class="btn btn-lg" style="width:300px; height:65px; background:  #f6e7ff; font-weight: bold; border-radius: 10px;">Breakfast Menu</div>
                        </a> <br><br>
                        <a>
                            <div class="btn btn-lg btn-light" style="width:300px; height:65px; font-weight: bold; border-radius: 10px;">Low-Calories Recipe</div>
                        </a> <br><br>
                        <a href="">
                            <div class="btn btn-lg" style="width:300px; height:65px; background:  #f6e7ff;font-weight: bold;border-radius: 10px;">Healthy Recipe</div>
                        </a><br><br>
                        <a href="">
                            <div class="btn btn-lg" style="width:300px; height:65px; background:  #f6e7ff;font-weight: bold;border-radius: 10px;">Lunch Recipe</div>
                        </a><br><br>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <div class="card shadow ">
                                    <div class="thumb-content">
                                        <img src="images/gallary-3.jpg" class="card-img-top" alt="" width="200" height="300"><br>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="">
                                                <p style="font-weight: bold;">Lorem ipsum dolor sit amet consecteture iur ouy</p>
                                                <h5 class="text-center">10$</h5>
                                            </div>


                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mb-2 mt-3">Buy now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-3" style="border-radius: 100px;">
                                <div class="card shadow ">
                                    <div class="thumb-content">
                                        <img src="images/gallary-6.jpg" class="card-img-top" alt="" width="200" height="300"><br>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="">
                                                <p style="font-weight: bold;">Lorem ipsum dolor sit amet consecteture iur ouy</p>
                                                <h5 class="text-center">10$</h5>

                                            </div>


                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mb-2 mt-3">Buy now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>






                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px; ">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="images/about-section.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h1 style="color: purple; font-weight:bolder">Testimonials About Us</h1>
                    </div>
                    <p style="font-weight: bold;">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labo</p>

                    <div class="py-5 container-fluid" style="background-color: #f6e7ff; border-radius: 15px; font-weight: bold; ">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nemo pariatur nam architecto, debitis a qui ipsam cumque atque exercitationem deserunt. Est sit cumque sequi obcaecati hic et laudantium animi! Lorem ipsum dolor si</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid  text-light mt-5 py-5" style="background-color: #f6e7ff; ;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block   mb-4" style="color: purple; font-weight: bolder;font-family:Georgia;">Eatly</h4>
                    <p class="mb-4" style="color: purple; font-weight:bold;">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor
                        No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2" style="color: purple; font-weight: bold ;">123 Street, Lagos, Nigeria</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block  mb-4" style="color: purple; font-weight: bolder;font-family:Georgia;">About</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class=" mb-2" href="#" style="color: purple; text-decoration:none; font-weight: bold;">About Us</a>
                        <a class=" mb-2" href="#" style="color: purple; text-decoration:none; font-weight: bold;">Our Services</a>
                        <a class="" href="#" style="color: purple; text-decoration:none; font-weight: bold;">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block   mb-4" style="color: purple; font-weight: bolder;font-family:Georgia;">Movement</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class=" mb-2" href="#" style="color: purple; text-decoration:none; font-weight: bold;">Home</a>
                        <a class=" mb-2" href="#" style="color: purple; text-decoration:none; font-weight: bold;">About Us</a>
                        <a class=" mb-2" href="#" style="color: purple; text-decoration:none; font-weight: bold;">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block   mb-4" style="color: purple; font-weight: bolder;font-family:Georgia;">Company</h4>
                    <div class="d-flex flex-column justify-content-start">

                        <h6 class=" text-uppercase  mb-2" style="color: purple; text-decoration:none; font-weight: bold;">Follow Us</h6>
                        <h6 class=" text-uppercase  mb-2" style="color: purple; text-decoration:none; font-weight: bold;">Follow Us</h6>
                        <h6 class=" text-uppercase  mb-2" style="color: purple; text-decoration:none; font-weight: bold;">Follow Us</h6>
                    </div>

                </div>
                <div class="container-fluid  text-light border-top border-secondary py-4">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-md-6 text-center text-md-start">
                                <p class="mb-md-0" style="color: purple;">&copy; <a href="#" style="color: purple; text-decoration:none;">Your Site Name</a>. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <p class="mb-0" style="color: purple;">Terms and Conditions &nbsp;<a style="color: purple; text-decoration:none;" href="#">Privacy Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="container-fluid  text-light border-top border-secondary py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div> -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



</body>

</html>