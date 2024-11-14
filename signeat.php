<?php

session_start();
// include "php/logic.php";
if (isset($_SESSION['eat'])) {
  header('location: eatly.php');
} 

    include 'eatt.php';
    $get_name = $get_email= $get_address = $get_phone = $get_password = $get_confirm = "";
$get_nameerr = $get_emailerr = $get_addresserr = $get_phoneerr = $get_passworderr = $get_confirmerr =   "";

    $swal = "";
     $swallogin =""; 

    if (isset($_POST['get_btn'])) {

      $get_name = $_POST['get_name'];
      $get_email = $_POST['get_email'];
      $get_address = $_POST['get_address'];
      $get_phone= $_POST['get_phone'];
      $get_password = $_POST['get_pwd'];
      $get_confirm = $_POST['conf_pwd'];
    
      if (empty($get_name)) {
        $get_nameerr = 'Field cannot be empty';
      } else {
        $get_nameerr = "";
      }
    
      if (empty($get_email)) {
        $get_emailerr = 'Field cannot be empty';
      } else {
        $get_emailerr = "";
      }
      if (empty($get_address)) {
        $get_addresserr = 'Field cannot be empty';
      } else {
        $get_addresserr = "";
      }
      if (empty($get_phone)) {
        $get_phonerr = 'Field cannot be empty';
      } else {
        $get_phoneerr = "";
      }
      if (empty($get_confirm)) {
        $get_confirmerr = 'Field cannot be empty';
      } else {
        $get_confirmerr = "";
      }
    
      if (empty($get_password)) {
        $get_passworderr = 'Field cannot be empty';
      } else {
        $get_passworderr = "";
      }
    
    
    
      $uppercase = preg_match('@[A-Z]@', $get_password);
      $lowercase = preg_match('@[a-z]@', $get_password);
      $number = preg_match('@[0-9]@', $get_password);
      $specialChars = preg_match('@[^\W]@', $get_password);
      if (!empty($get_password) && (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($get_password) < 8)) {
       echo "
          <script>
            Swal.fire({
              icon: 'error',
              title: 'registration',
              text: 'password must consist of lowercase,uppercase,special characters and must be 8 characters long'
            })
            </script>
          ";
      } else {
        $uppercase = preg_match('@[A-Z]@', $get_confirm);
        $lowercase = preg_match('@[a-z]@', $get_confirm);
        $number = preg_match('@[0-9]@', $get_confirm);
        $specialChars = preg_match('@[^\W]@', $get_confirm);
        if (!empty($get_confirm) && (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($get_confirm) < 8)) {
          echo  "
          <script>
            Swal.fire({
              icon: 'error',
              title: 'registration',
              text: 'password must consist of lowercase,uppercase,special characters and must be 8 characters long'
            })
            </script>
          ";
        } else {
          if ($get_password == $get_confirm) {
            if (!empty($get_name) && !empty($get_email) && !empty($get_password) && !empty($get_confirm)) {
              $check_name_indb = mysqli_query($connect, "SELECT * FROM eat WHERE email = '$get_email'");
    
              if (mysqli_num_rows($check_name_indb) > 0) {
                echo "
                  <script>
                  Swal.fire({
                    icon: 'info',
                    title: 'registration',
                    text: 'email already exists'
                  })
                  </script>
                ";
              } else {
                // $uppercase = preg_match('@[A-Z]@',$get_password);
                // $lowercase = preg_match('@[a-z]@', $get_password);
                // $number = preg_match('@[0-9]@', $get_password);
                // $specialChars = preg_match('@[^\W]@', $get_password);
                // if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($get_password) < 8) {
                //   $swal = "
                //   <script>
                //     Swal.fire({
                //       icon: 'error',
                //       title: 'registration',
                //       text: 'password must consist of lowercase,uppercase,special characters and must be 8 characters long'
                //     })
                //     </script>
                //   ";
                // }else {
    
                $hash = password_hash($get_password, PASSWORD_DEFAULT);
                $insert_to_db = mysqli_query($connect, "INSERT INTO eat (name, email,address,phone, password) VALUES('$get_name', '$get_email','$get_address','$get_phone','$hash')");
                if ($insert_to_db == true) {
                  $_SESSION['eat'] = $get_email;
                  header("location: eatly.php");
                  echo  "
                  <script>
                  Swal.fire({
                    icon: 'success',
                    title: 'registration',
                    text: 'register Successfully!'
                  }).then(location.reload())
                  </script>
                        ";
                } else {
    
                 echo  "<script>
                    Swal.fire({
                      icon: 'error',
                      title: 'registration',
                      text: 'Something went wrong'
                    })
                    </script>
                    ";
                }
                // }
              }
            }
          } else {
            $get_confirmerr = 'password do not match';
          }
        }
      }
      // echo $swal;
    }


    // LOGIN

   
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
<body class="container-fluid pt-5 pb-3"style="background: url(images/ahtziri-lagarde-fwWNzqif624-unsplash.jpg);background-size:cover;background-position:center center;">
         <div class="main-wrapper">
        <div class="page-wrapper full-page">
          <div class="page-content d-flex align-items-center justify-content-center">
    
            <div class="row w-100 mx-0 auth-page">
              <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card  text-light "style="background-color: #202020;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.7);border-radius:10px;">
                  <div class="row">
                    <div class="col-md-4 pe-md-0">
                      <div class="auth-side-wrapper">
    
                      </div>
                    </div>
                    <div class="col-md-8 ps-md-0">
                      <div class="auth-form-wrapper px-4 py-5">
                        <a href="#" class="noble-ui-logo d-block mb-2"style="font-size:25px;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; font-style: italic;color:white;">EATLY</a>
                        <h5 class="text-muted fw-normal mb-4">Create a free account.</h5>
                        <form action="" class="forms-sample" method="POST">
                          <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="get_name" value="<?= $get_name ?>" id="exampleInputUsername1" autocomplete="Username" placeholder="Username">
                            <span class="text-danger"><?= $get_nameerr ?></span>
                          </div>
                          <div class="mb-3">
                            <label for="userEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="get_email" value="<?= $get_email ?>" id="userEmail" placeholder="Email">
                            <span class="text-danger"><?= $get_emailerr ?></span>
                          </div>
                          <div class="mb-3">
                            <label for="userAddress" class="form-label">Address</label>
                            <input type="address" class="form-control" name="get_address" value="<?= $get_address ?>" id="userAddress" placeholder="Address">
                            <span class="text-danger"><?= $get_addresserr ?></span>
                          </div>
                          <div class="mb-3">
                            <label for="userPhone" class="form-label">Phone</label>
                            <input type="phone" class="form-control" name="get_phone" value="<?= $get_phone ?>" maxlength="11" required placeholder="Phone Number">
                            <span class="text-danger"><?= $get_phoneerr ?></span>
                          </div>
                          <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="get_pwd" value="<?= $get_password ?>" id="userPassword" autocomplete="current-password" placeholder="Password">
                            

                            <span class="text-danger"><?= $get_passworderr ?></span>
                           
                          </div>
                          <div class="mb-3">
                            <label for="userPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="conf_pwd" id="userConfPassword" autocomplete="current-password" placeholder="Confirm Password">
                            <input type="checkbox" onclick="myFunction()">Show Password
                             <script>
                            function myFunction() {
                              var x = document.getElementById("userPassword");
                              var y = document.getElementById("userConfPassword")
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                              if (y.type === "password") {
                                y.type = "text";
                              } else {
                                y.type = "password";
                              }
                            }
                            </script>

                            <span class="text-danger"><?= $get_confirmerr ?></span>
                          </div>
                          <!-- <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="authCheck">
    
                            <label class="form-check-label" for="authCheck">
                              Remember me
                            </label>
                            
                          </div> -->
                          <div>
                            <button class="btn btn-light text-dark me-2 mb-2 mb-md-0" name="get_btn" style="font-weight: bold;">Sign up</button>
                            <button type="button" class="btn btn-outline-light btn-icon-text mb-2 mb-md-0" name="get_btn">
                              <i class="btn-icon-prepend" data-feather="twitter"></i>
                              Sign up with twitter
                            </button>
                          </div>
                          <a href="logeat.php" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>
      <!-- <script src="sweetalert.js"></script> -->
</body>
</html>
      <!-- name
      email
      address
      phone
      password
      confirm password -->
    
    



    
       
          




















    
    
      <!-- core:js -->
      <script src="../assets/vendors/core/core.js"></script>
      <!-- endinject -->
    
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
    
      <!-- inject:js -->
      <script src="../assets/vendors/feather-icons/feather.min.js"></script>
      <script src="../assets/js/template.js"></script>
      <script src="../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    
    <script src="sweetalert.js"></script>
    
      <!-- endinject -->
    
      <!-- Custom js for this page -->
      <!-- End custom js for this page -->
</body>
</html>