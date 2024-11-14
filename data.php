<?php
include 'datacon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRACTICE </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
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

<body class="container">
  <form action="data.php" method="POST" class="p-4 border m-5 border-primary">
    <h1 class="display-5 text-center">Sign Up Form</h1>
    <br><br><br>
    <div class="float-right">
      <input type="hidden" value="<?php echo $find_image ?>" name="old_name">
      <div style="border: 2px #26baee solid; width:240px;height: 240px; border: radius 15px;" class="mb-2">
        <img id="output1345" src="<?php echo $find_image ?>" alt="CLICK 'BROWSE' TO UPLOAD PASSPORT" style="width: 240px; height:240px">
        <br>

        <!-- THIS PASTES THE PICTURE TO THE BORDER BOX -->
        <script>
          var loadFile1345 = function(event) {
            var my_image = document.getElementById('output1345');
            var fi = document.getElementById('file1345');
            if (fi.files.length > 0) {
              my_image.src = URL.createObjectURL(event.target.files[0]);
            }
          };
        </script>
      </div>

      <!-- THIS GRABS THE NAME OF THE IMAGE -->
      <div class="custom-file mb-5" style="width: 200px;">
        <input type="file" class="custom-file-input" id="file1345" onchange="loadFile1345(event)" name="fileToUpload1" accept="image/*">
        <label class="custom-file-label" for="customFile">Choose Photo</label>
      </div>


    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <input type="hidden" name="get_id" value="<?php echo $find_id ?>" name="old_name">
    <label for="name">Name:</label><br>
    <input type="text" class="form-control" required placeholder="Enter Your Full Name" name="get_name">
    <br>
    <label for="email">Email:</label><br>
    <input type="email" class="form-control" name="get_email" placeholder="Enter Your Email" required>
    <br>
    <label for="address">Address:</label><br>
    <input type="text" class="form-control" name="get_address" placeholder="Enter Your Address" required>
    <br>
    <label for="dob">Date Of Birth</label><br>
    <input type="datetime" name="get_dob" placeholder="Enter Your DOB" class="form-control" required>
    <br>
    <label for="phone">Phone:</label><br>
    <input type="tel" class="form-control" name="get_phone" placeholder="Enter Your Phone" required maxlength="11">
    <br>
    <label for="password">Password</label><br>
    <input type="password" name="get_password" class="form-control" placeholder="Enter Your Password" required>
    <br>
    <button type="submit" name="get_submit" class="btn btn-primary">SUBMIT</button>

  </form>
  <!-- name
    email
    address
    dob
    phone
    password -->

  <?php
  if (isset($_POST['get_submit'])) {
    $get_name = $_POST['get_name'];
    $get_email = $_POST['get_email'];
    $get_address = $_POST['get_address'];
    $get_dob = $_POST['get_dob'];
    $get_phone = $_POST['get_phone'];
    $get_password = $_POST['get_password'];

    $fetch_name = "";
    $check_name_indb = mysqli_query($connect, "SELECT * FROM practice WHERE name = '$get_name'");
    while ($row = mysqli_fetch_assoc($check_name_indb)) {
      $fetch_name = $row['name'];
    }
    echo $fetch_name;
    if ($fetch_name == "") {
      $insert_to_db = mysqli_query($connect, "INSERT INTO practice(name, email, address,dob, phone, password) VALUES('$get_name','$get_email','$get_address','$get_dob','$get_phone','$get_password')");
      if ($insert_to_db == true) {
        echo "<script>alert('$get_name is now registered in the database')</script>";
      } else {
        echo "<script>alert('An error has occured')</script>";
      }
    } else {
      echo "<script>alert('$get_name already exists in the database')</script>";
    }
  }
  ?>





</body>

</html>