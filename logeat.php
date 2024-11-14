<?php
    include 'eatt.php';
//     session_start();
// if (isset($_SESSION['eatly'])) {
//   header('location: eatly.php');
// } 

$get_email = $get_pwd = "";
$get_emailerr = $get_pwderr = "";
$swallogin = "";
if (isset($_POST['get_btnLogin'])) {

  $get_email = $_POST['get_email'];
  $get_pwd = $_POST['get_pwd'];

  if (empty($get_email)) {
    $get_emailerr = 'Field cannot be empty';
  } else {
    $get_emailerr = "";
  }

  if (empty($get_pwd)) {
    $get_pwderr = 'Field cannot be empty';
  } else {
    $get_pwderr = "";
  }

  if (!empty($get_email) && !empty($get_pwd)) {
    $check_email_indb = mysqli_query($connect, "SELECT * FROM eat WHERE email ='$get_email'");
    if (mysqli_num_rows($check_email_indb) > 0) {
      $fecth = mysqli_fetch_array($check_email_indb);
      // echo $fecth['password'];
      // echo $get_pwd;
      if (password_verify($get_pwd, $fecth['password'])) {
        $_SESSION['eatly'] = $get_email;
        header("location:eatly.php");
        $swallogin =  "
        <script>
          const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
          });
          
          Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
          }).then(function(){
            location.href = 'eatly.php';
          })
        </script>
        ";
      } else {
        $swallogin = "<script>
        Swal.fire({
          icon: 'error',
          title: 'Login',
          text: 'Invalid Login'
        })
        </script>
        ";
      }
    } else {
      $swallogin = "<script>
        Swal.fire({
          icon: 'error',
          title: 'Login',
          text: 'Invalid Login'
        })
        </script>
        ";
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <script>
  document.getElementById('loginForm').addEventListener('submit',function(event){
    event.preventDefault();

    const userEmail = document.getElementById('userEmail').value;
    const password = document.getElementById('userPassword').value;

    if (userEmail === 'user' && password === 'pass') {
      window.location.href = 'eatly.php';
    } else {
      alert('Invalid email or password');
    }
  })
</script>

</head>
<body class="container-fluid pt-5 pb-3"style="background: url(img/ahtziri-lagarde-fwWNzqif624-unsplash.jpg);background-size:cover;background-position:center center;">
<div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card  text-light" style="background-color: #202020;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.7);border-radius:10px;">
              <div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="d-block mb-2" style="font-size:25px;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; font-style: italic;color:white;">Eatly</a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account</h5>
                    <form action="" class="forms-sample" method="POST" id="loginForm">
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" name="get_email" value="<?= $get_email ?>" class="form-control" id="userEmail" placeholder="Email">
                        <span class="text-danger"><?= $get_emailerr ?></span>
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" name="get_pwd" value="<?= $get_pwd ?>" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                        <span class="text-danger"><?= $get_pwderr ?></span>
                        <input  type="checkbox" onclick="myFunction()">Show Password
                             <script>
                            function myFunction() {
                              var x = document.getElementById("userPassword");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                              
                            }
                            </script>
                      </div>
                      <!-- <div class="form-check mb-3"> -->
                        <!-- <input type="checkbox" class="form-check-input" id="authCheck"> -->
                       
                      <!-- </div> -->
                      <div>
                        <button type="submit" name="get_btnLogin" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          <i class="btn-icon-prepend" data-feather="twitter"></i>
                          Login with twitter
                        </button>
                      </div>
                      <a href="signeat.php" class="d-block mt-3 text-muted">Not a user? Sign up</a>
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

    
</body>
</html>