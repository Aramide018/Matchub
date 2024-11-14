<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=, initial-scale=1.0">
<title>ADVANCE</title>
<link rel="stylesheet" href="external.css">

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
<style>
    /* This is for laptop*/
    @media (min-width: 1024px) {
        #my_font {
            font-size: 30px;
        }
    }

    /* This is for phone */
    @media (max-width: 768px) {
        #my_font {
            font-size: 15px;
        }
    }
</style>

</head>

<body style="background-color: #fff">

    <!--THIS IS CAROUSEL-->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>

        </ul>


        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/lighthouse.jpg" alt="" width="2000" height="500">
                <div class="carousel-caption">
                    <h3>Lighthouse</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Tulips.jpg" alt="" width="2000" height="500">
                <div class="carousel-caption">
                    <h3>Tulips</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Koala.jpg" alt="" width="2000" height="500">
                <div class="carousel-caption">
                    <h3>Koala</h3>
                </div>

            </div>
            <div class="carousel-item">
                <img src="img/Desert.jpg" alt="" width="2000" height="500">
                <div class="carousel-caption">
                    <h3>Desert</h3>
                </div>

            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>



    <br><br><br>
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Bootstrap Tutorial</h1>
                    <h2>Nesting Button Groups</h2>
                    <p>Nest button groups to create dropdown menus:</p>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary"><a href="about.html" style="color: white; font-size: 20px; text-decoration: none;">About</a></button>
                        <button type="button" class="btn btn-primary"><a href="contact_us.html" style="color: white; font-size: 20px;text-decoration: none;">Contact</a></button>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" style="color: white; font-size: 20px;" data-toggle="dropdown">Cars</button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="toyota.html" style="font-size: 20px;">Toyota</a>
                                <a class="dropdown-item" href="#" style="font-size: 20px;">Lexus</a>
                                <a class="dropdown-item" href="#" style="font-size: 20px;">Camry</a>
                                <a class="dropdown-item" href="#" style="font-size: 20px;">Tesla</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="img/Penguins.jpg" style="height: 200px; width: 200px;" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="img/Chrysanthemum.jpg" style="height: 200px; width: 200px;" alt="">
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <h2>Modal Example</h2>
        <!--Button to open the Modal-->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#max1">
            More About Us
        </button>

        <!--The Modal-->
        <div class="modal" id="max1" style="color:#0080FE;">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <!--Modal Header-->
                    <div class="modal-header">
                        <h4 class="modal-title">Read More on Advance Coders</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!--Modal body-->
                    <div class="modal-body">
                        <p> Lot atque ducimus.
                            Perferendis quia similique tempora corporis quam repudiandae repellat dicta facere id!
                            Velit aliquam saepe earum reprehenderit adipisci!</p>
                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer">rem ipsum dolor sit amet consectetur adipisicing elit.
                        Magnam corrupti providen
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <a href="about.html" style="color: crimson; font-size: 20px; cursor: pointer;">About Us</a>&nbsp;&nbsp;
        <a href="contact_us.html" style="color: crimson; font-size: 20px; cursor: pointer;">Contact Us</a>
        <br><br><br>

        <h1 style="background-color:#1134A6; color:white; text-align:center">WELCOME TO MY PAGE </h1>
        <h2>WELCOME TO MY PAGE</h2>
        <h3 class="text-success mb-4">WELCOME (GREEN->SUCCESS)</h3>
        <h3 class="text-primary">WELCOME (PRIMARY->BLUE)</h3>
        <h3 class="text-danger">WELCOME (DANGER->RED)</h3>
        <h3 class="text-dark">WELCOME (DARK->BLACK)</h3>
        <h3 class="text-info mt-4">WELCOME (INFO->LIGHT BLUE)</h3>
        <h3 class="text-secondary">WELCOME (SECONDARY->GREY)</h3>
        <h3 class="text-light">WELCOME (LIGHT->WHITE)</h3>
        <h3 class="text-warning">WELCOME (WARNING->YELLOW)</h3>
        <br><br><br>

        <button class="btn btn-primary">
            Messages <span class="badge badge-light text-warning">4</span>
        </button>


        <br><br>

        <button class="btn btn-danger">
            Notification <span class="badge badge-dark text-success">51</span>
        </button>
        <br><br>
        <center>

            <table class="table table-striped table-hover table-bordered table-sm">
                <thead class="bg-secondary">
                    <th>s/n</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James</td>
                        <td>0804857586</td>
                        <td class="text-danger">Abuja</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Henry</td>
                        <td>08079696966</td>
                        <td class="bg-primary">Lagos</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kelly</td>
                        <td>080595855</td>
                        <td>Ibadan</td>
                    </tr>
                </tbody>
            </table>

            <br><br>
            <table border="1" cellpadding="8" style="border-collapse: collapse; text-align: center">
                <thead style="background-color: rgb(165, 165, 253);">
                    <th>s/n</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James</td>
                        <td>0804857586</td>
                        <td>Abuja</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Henry</td>
                        <td>08079696966</td>
                        <td>Lagos</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kelly</td>
                        <td>080595855</td>
                        <td>Ibadan</td>
                    </tr>
                </tbody>
            </table>
        </center>
        <br><br>




        <div class="row">
            <div class="col-sm-3">
                <img src="img/lighthouse.jpg" style="height: 100px; width: 200px;" alt="">
            </div>

            <div class="col-sm-3">
                <img src="img/desert.jpg" style="height: 100px; width: 200px;" alt="">
            </div>

            <div class="col-sm-3">
                <img src="img/Hydrangeas.jpg" style="height: 100px; width: 200px;" alt="">

            </div>

            <div class="col-sm-3">
                <img src="img/Jellyfish.jpg" style="height: 100px; width: 200px;" alt="">
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <img src="img/Koala.jpg" style="height: 100px; width: 200px;" alt="">
                </div>

                <div class="col-sm-6">
                    <img src="img/Penguins.jpg" style="height: 100px; width: 200px;" alt="">
                </div>
            

                <div class="row">
                    <div class="col-sm-2">
                        <img src="img/Chrysanthemum.jpg" style="height: 100px; width: 200px;" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="img/Penguins.jpg" style="height: 100px; width: 200px;" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="img/Tulips.jpg" style=" height: 100px; width: 200px;" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="img/Hydrangeas.jpg" style="height: 100px; width: 200px;" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="img/Koala.jpg" style="height: 100px; width: 200px;" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="img/Tulips.jpg" style="height: 100px; width: 200px;" alt="">
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>

                    <?php

                    if (isset($_POST['get_submit'])) {
                        $get_name = $_POST['get_name'];
                        $get_address = $_POST['get_address'];
                        $get_email = $_POST['get_email'];
                        $get_phone = $_POST['get_phone'];
                        $get_gender = $_POST['get_gender'];
                        $get_comment = $_POST['get_comment'];
                        $get_employ = $_POST['get_employ'];
                        $get_location = $_POST['get_location'];

                        date_default_timezone_set("Africa/Lagos");
                        $date = date("Y-m-d");

                        $fetch_name = "";
                        $check_name_indb = mysqli_query($connect, "SELECT * FROM register WHERE name = '$get_name'");

                        while ($row = mysqli_fetch_assoc($check_name_indb)) {
                            $fetch_name = $row['name'];
                        }

                        echo $fetch_name;


                        if ($fetch_name == "") {
                            $passport = "passport/" . $_FILES['fileToUpload']['name'];
                            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $passport);

                            $insert_to_db = mysqli_query($connect, "INSERT INTO register (name, address, email, phone, gender, comment, employment,location,images,datesub) VALUES('$get_name', '$get_address', '$get_email', '$get_phone', '$get_gender', '$get_comment', '$get_employ','$get_location','$passport','$date')");
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


                    <center>
                        <!--BOOTSTRAP FORM VALIDATION-->
                        <form action="advance.php" class="was-validated border p-4  border-success" method="POST" enctype="multipart/form-data">
                            <div class="float-right">
                                <!-- This is your border box   -->
                                <div style="border: 2px #26baee solid; width:240px;height: 240px; border: radius 15px;" class="mb-2">
                                    <img id="output1344" src="#" alt="CLICK 'BROWSE' TO UPLOAD PASSPORT" style="width: 240px; height:240px">
                                    <br>

                                    <!-- THIS PASTES THE PICTURE TO THE BORDER BOX -->
                                    <script>
                                        var loadFile1344 = function(event) {
                                            var my_image = document.getElementById('output1344');
                                            var fi = document.getElementById('file1344');
                                            if (fi.files.length > 0) {
                                                my_image.src = URL.createObjectURL(event.target.files[0]);
                                            }
                                        };
                                    </script>
                                </div>

                                <!-- THIS GRABS THE NAME OF THE IMAGE -->
                                <div class="custom-file mb-5" style="width: 200px;">
                                    <input type="file" class="custom-file-input" id="file1344" onchange="loadFile1344(event)" name="fileToUpload" accept="image/*">
                                    <label class="custom-file-label" for="customFile">Choose photo</label>
                                </div>

                            </div>
                            <br><br><br><br><br><br><br>
                            <label for="name">Name:</label><br>
                            <input type="text" class="form-control" name="get_name" placeholder="Enter your name" required maxlength="500">
                            <br><br>
                            <label for="address">Address:</label><br>
                            <input type="text" class="form-control" name="get_address" placeholder="Enter Your Address" required maxlength="500">
                            <br><br>
                            <label for="email">Email:</label><br>
                            <input type="email" placeholder="Enter Your Email" name="get_email" class="form-control" required maxlength="500">
                            <br><br>
                            <label for="phone">Phone:</label><br>
                            <input type="tel" placeholder="Enter Your Phone No" name="get_phone" class="form-control" required maxlength="11">
                            <br><br>
                            <label for="Gender">Gender:</label><br>
                            <select class="form-select" name="get_gender">
                                <option value="gender" name="get_gender" disabled selected hidden>Select Gender</option>
                                <option value="male" name="get_gender">Male</option>
                                <option value="female" name="get_gender">Female</option>
                                <option value="others" name="get_gender">Others</option>
                            </select>
                            <br><br><br>
                            <label for="location">Location</label><br>
                            <select class="form-select" name="get_location">
                                <option value="Location" disabled selected hidden>Select Location</option>
                                <option value="lagos">Lagos</option>
                                <option value="abuja">Abuja</option>
                                <option value="kano">Kano</option>
                                <option value="ibadan">Ibadan</option>
                            </select>
                            <br><br>
                            <label for="comment">Comment</label><br>
                            <textarea cols="20" rows="5" required maxlength="300" name="get_comment" class="form-control"></textarea>
                            <br><br>
                            <label for="employment">Are you employed</label><br>
                            <input type="radio" name="get_employ" value="yes" required>Yes
                            <input type="radio" name="get_employ" value="no">No
                            <br><br>
                            <button type="submit" class="btn btn-primary" style="border-radius: 8px;" name="get_submit">SUBMIT</button>
                        </form>
                        <a href="https://api.whatsapp.com/send?phone=2347043397606&text=I want to make an enquiry regarding smartbook" target="_blank">
                            <span class="fa fa-whatsapp fixed-bottom p-3'" style="color: green; font-size: 42px; text-align: left;"></span>

                        </a>

                        <br><br><br>
                        <?php
                        $find_image = $find_id =  $find_name = $find_address = $find_email =  $find_phone = $find_gender = $find_comment = $find_employment = "";

                        if (isset($_POST['src_name'])) {
                            $search = $_POST['search'];
                            $check_search = mysqli_query($connect, "SELECT * FROM register WHERE name = '$search'");
                            while ($row = mysqli_fetch_assoc($check_search)) {
                                $find_id = $row['id'];
                                $find_name =  $row['name'];
                                $find_address =  $row['address'];
                                $find_email =  $row['email'];
                                $find_phone =  $row['phone'];
                                $find_gender =  $row['gender'];
                                $find_comment =  $row['comment'];
                                $find_employment =  $row['employment'];
                                $find_image = $row['images'];
                            }
                            if ($find_name == "") {
                                echo "<script>alert('$find_name does not exists')</script>";
                            }
                        }

                        if (isset($_POST['get_update'])) {
                            $get_id = $_POST['get_id'];
                            $get_name = $_POST['get_name'];
                            $get_address = $_POST['get_address'];
                            $get_email = $_POST['get_email'];
                            $get_phone = $_POST['get_phone'];
                            $get_gender = $_POST['get_gender'];
                            $get_comment = $_POST['get_comment'];
                            $get_employ = $_POST['get_employ'];


                            if (empty($_FILES['fileToUpload1']['name'])) {
                                $image_name = $_POST['old_name'];
                            } else {
                                $image_name = "passport/" . $_FILES['fileToUpload1']['name'];
                                move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], $image_name);
                            }

                            $update_to_db = mysqli_query($connect, "UPDATE register SET name = '$get_name', address = '$get_address', email = '$get_email', phone = '$get_phone', gender = '$get_gender', comment = '$get_comment', employment = '$get_employ', images = '$image_name' WHERE id = '$get_id'");
                            if ($update_to_db == true) {
                                echo "<script>alert('$get_name has successfully been updated')</script>";
                            }
                        }
                        ?>
                        <form action="advance.php" method="POST">
                            <div class="form-group input-group">
                                <!-- <input type="text" name="search" id="" class="form-control" placeholder="" aria-describedby="helpId">  -->
                                <input list="data" name="search" class="form-control" autocomplete="off" placeholder="type name to search">
                                <datalist id="data">
                                    <?php
                                    $get_all_name = mysqli_query($connect, "SELECT * FROM register");
                                    while ($row = mysqli_fetch_assoc($get_all_name)) {
                                    ?>
                                        <option value="<?php echo $row['name'] ?>">
                                        <?php
                                    }
                                        ?>

                                </datalist>
                                <div class="input-group append">
                                    <button class="btn btn-success" name="src_name">SEARCH</button>
                                </div>
                            </div>

                        </form>
                        <h4>Bootstrap Edit/Update Form </h4>

                        <form action="advance.php" class="was-validated border p-4  border-success" method="POST" enctype="multipart/form-data">
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
                            <br><br><br><br><br><br><br>
                            <input type="hidden" name="get_id" value="<?php echo $find_id ?>" name="old_name">
                            <label for="name">Name:</label><br>
                            <input type="text" class="form-control" name="get_name" id="get_name" placeholder="Enter your name" value="<?php echo $find_name; ?>" required maxlength="500">
                            <br><br>
                            <label for="address">Address:</label><br>
                            <input type="text" class="form-control" name="get_address" placeholder="Enter Your Address" value="<?php echo $find_address; ?>" required maxlength="500">
                            <br><br>
                            <label for="email">Email:</label><br>
                            <input type="email" placeholder="Enter Your Email" name="get_email" class="form-control" value="<?php echo $find_email; ?>" required maxlength="500">
                            <br><br>
                            <label for="phone">Phone:</label><br>
                            <input type="tel" placeholder="Enter Your Phone No" name="get_phone" class="form-control" value="<?php echo $find_phone; ?>" required maxlength="11">
                            <br><br>
                            <label for="Gender">Gender:</label><br>
                            <select name="get_gender" class="form-select">
                                <option value="<?php echo $find_gender ?>" name="get_gender"><?php echo $find_gender ?></option>
                                <option value="male" name="get_gender">Male</option>
                                <option value="female" name="get_gender">Female</option>
                                <option value="others" name="get_gender">Others</option>
                            </select>
                            <br><br>
                            <label for="comment">Comment</label><br>
                            <textarea cols="20" rows="5" required maxlength="300" name="get_comment" class="form-control"><?php echo $find_comment; ?></textarea>
                            <br><br>
                            <label for="employment">Are you employed</label><br>
                            <?php
                            $yes = $no = "";
                            if ($find_employment == "yes") {
                                $yes = "checked";
                            } elseif ($find_employment == "no") {
                                $no = "checked";
                            }
                            ?>
                            <input type="radio" name="get_employ" value="yes" required <?php echo $yes; ?>>Yes
                            <input type="radio" name="get_employ" value="no" <?php echo $no; ?>>No
                            <br><br>
                            <button type="submit" class="btn btn-warning" style=" border-radius: 8px;" name="get_update">UPDATE</button>
                            &nbsp;&nbsp;
                            <button type="submit" id="get_delete" name="get_delete" class="btn btn-danger" style=" border-radius: 8px;">DELETE</button>
                        </form>
                        <script>
                            $(document).ready(function() {
                                $("#get_delete").click(function() {
                                    var get_delete = confirm('Are you sure you want to delete' + " " + get_name + " " + 'from the database?');
                                    var get_name = document.getElementById('get_name').value;
                                    if (get_delete === true) {
                                        alert(get_name + " " + 'is now deleted');
                                        return true;
                                    } else {
                                        return false;
                                    }
                                })
                            });
                        </script>
                        <?php
                        if (isset($_POST['get_delete'])) {
                            $get_id = $_POST['get_id'];
                            $get_name = $_POST['get_name'];
                            $delete_from_db = mysqli_query($connect, "DELETE FROM register WHERE id = '$get_id'");

                            if ($delete_from_db === true) {
                                echo "<script>alert('$get_name has been successfully deleted')</script>";
                            }
                        }
                        ?>
                        <br><br><br>
                        <h2>All Registered Members</h2>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Comment</th>
                                    <th>Employment</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $inc = 1;
                                $display_all_from_db = mysqli_query($connect, "SELECT * FROM register ");
                                while ($row = mysqli_fetch_assoc($display_all_from_db)) {


                                ?>
                                    <tr>
                                        <td><?php echo $inc; ?></td>

                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td><?php echo $row['comment'] ?></td>
                                        <td><?php echo $row['employment'] ?></td>
                                        <td><?php echo $row['location'] ?></td>

                                    </tr>

                                <?php
                                    $inc++;
                                }
                                ?>
                            </tbody>
                        </table>

                        <br><br><br>
                        <form action="advance.php" method="POST">
                            <h3>Location</h3>
                            <select name="get_location">
                                <option value="Location" disabled selected hidden>Select Location</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Kano">Kano</option>
                                <option value="Ibadan">Ibadan</option>
                            </select>
                            <br><br>
                            <button type="submit" name="get_filter" class="btn btn-primary">FILTER</button>
                            <br><br>
                        </form>
                        <?php
                        if (isset($_POST['get_filter'])) {
                            $get_location = $_POST['get_location'];
                        ?>

                            <h2><?php echo $get_location ?> Registered Members</h2>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Comment</th>
                                        <th>Employment</th>
                                        <th>Location</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $inc = 1;
                                    $display_all_from_db = mysqli_query($connect, "SELECT * FROM register WHERE location = '$get_location' ");
                                    while ($row = mysqli_fetch_assoc($display_all_from_db)) {


                                    ?>
                                        <tr>
                                            <td><?php echo $inc; ?></td>

                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['address'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['comment'] ?></td>
                                            <td><?php echo $row['employment'] ?></td>
                                            <td><?php echo $row['location'] ?></td>

                                        </tr>

                                    <?php
                                        $inc++;
                                    }
                                    ?>
                                </tbody>
                            </table>




                        <?php
                        }
                        ?>
                        <br><br><br>
                        <?php
                        $count_all = mysqli_query($connect, "SELECT COUNT(id) as count_all FROM register");
                        while ($row = mysqli_fetch_assoc($count_all)) {
                            $get_count = $row['count_all'];
                        }


                        $sum_all = mysqli_query($connect, "SELECT SUM(amount) as total_amt FROM register");
                        while ($row = mysqli_fetch_assoc($sum_all)) {
                            $get_sum = $row['total_amt'];
                            // echo "<script>alert('$get_sum with counted no: $get_count')</script>";/.
                        }
                        ?>

                        <h2>SUM AMOUNT BY LOCATION</h2>
                        <form action="advance.php" method="POST">
                            <input list="show_location" placeholder="Select Location to sum" name="filter" required class="form-control" autocomplete="off">
                            <datalist id="show_location">
                                <?php
                                $get_branch = mysqli_query($connect, "SELECT * FROM register");
                                while ($row = mysqli_fetch_assoc($get_branch)) {
                                ?>
                                    <option value="<?php echo $row['location'] ?>"></option>
                                <?php
                                }
                                ?>
                            </datalist>
                            <button type="submit" class="btn btn-primary" name="submit_filter">FILTER</button>
                        </form>

                        <?php
                        $get_sum_filter = $get_count_filter = $get_total_filter = 0;
                        if (isset($_POST['submit_filter'])) {
                            $get_location = $_POST['filter'];

                            $count_filter = mysqli_query($connect, "SELECT COUNT(id) as count_filter FROM register WHERE location ='$get_location'");
                            while ($row = mysqli_fetch_assoc($count_filter)) {
                                $get_count_filter = $row['count_filter'];
                            }

                            $sum_filter = mysqli_query($connect, "SELECT SUM(amount) as total_filter FROM register WHERE location = '$get_location'");
                            while ($row = mysqli_fetch_assoc($sum_filter)) {
                                $get_sum_filter = $row['total_filter'];
                            }
                        }
                        ?>

                        <h4><?php echo "₦" . number_format($get_sum_filter) . ". Total number of members:" . $get_count_filter ?></h4>;


                        <br><br><br>
                        <h3>FILTER TIME</h3>
                        <form action="advance.php" method="POST">
                            From: <input type='date' name='from' required>
                            &nbsp;&nbsp; To: <input type='date' name='to' required>
                            <br><br><br>
                            &nbsp;&nbsp; <button type="submit" name="time" class="btn btn-primary btn-lg">FILTER TIME</button>
                        </form>
                        <?php
                        if (isset($_POST['time'])) {
                            $from = $_POST['from'];
                            $to = $_POST['to'];
                            $sum_filter = mysqli_query($connect, "SELECT SUM(amount) as total_filter FROM register WHERE datesub BETWEEN '$from' AND '$to'");
                            while ($row = mysqli_fetch_assoc($sum_filter)) {
                                $get_sum_filter = $row['total_filter'];
                            }
                        }
                        ?>


                        <br><br><br>

                        <h4><?php echo "₦" . number_format($get_sum_filter) . ". Total number of members:" . $get_total_filter ?></h4>;
                        <h3>Sum of time</h3>
                        <form action="advance.php" method="POST">
                            From: <input type='date' name='from' required>
                            &nbsp;&nbsp; To: <input type='date' name='to' required>
                            <br><br><br>
                            &nbsp;&nbsp; <button type="submit" name="sum" class="btn btn-primary btn-lg">FILTER Sum</button>
                        </form>
                        <?php
                        if (isset($_POST['sum'])) {
                            $from = $_POST['from'];
                            $to = $_POST['to'];
                        ?>


                            <h2>Registered Members From <?php echo $from . " - " . $to ?></h2>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Comment</th>
                                        <th>Employment</th>
                                        <th>Location</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $inc = 1;
                                    $display_between = mysqli_query($connect, "SELECT * FROM register WHERE datesub  BETWEEN '$from' AND '$to' ");
                                    echo "Error message:" . mysqli_error($connect);
                                    while ($row = mysqli_fetch_assoc($display_between)) {


                                    ?>
                                        <tr>
                                            <td><?php echo $inc; ?></td>

                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['address'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['comment'] ?></td>
                                            <td><?php echo $row['employment'] ?></td>
                                            <td><?php echo $row['location'] ?></td>

                                        </tr>

                                    <?php
                                        $inc++;
                                    }
                                    ?>
                                </tbody>
                            </table>




                        <?php
                        }
                        ?>
                        <br><br><br>
                        <br><br><br>
                        <h3>SUM BY FILTERED TIME</h3>
                        From: <input type="date" name="from" id="from" required>
                        &nbsp;&nbsp; To: <input type="date" name="to" id="to" required>
                        <br><br><br>
                        <button id="sum_filter" class="btn btn-primary btn-lg">Filter Time</button>



                        <!-- THIS IS THE AJAX CODE TO SMOOTHLY FETCH OUR DATA -->
                        <script>
                            $(document).ready(function() {
                                $('#sum_filter').click(function() {
                                    // alert('HIIIIII');
                                    var from = document.getElementById("from").value;
                                    var to = document.getElementById("to").value;

                                    if (window.XMLHttpRequest) {
                                        //IE7 chrome, firefox,opera MSedge Modern Browsers
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // IE6 and below
                                        // xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }

                                    // SEND DATA TO PROCESS
                                    xmlhttp.open("GET", "sum_time.php?from_var=" + from + "&to_var=" + to, true);
                                    xmlhttp.send();

                                    // RECEIVE PROCESSED DATA
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                                            document.getElementById("display_response").innerHTML = xmlhttp.responseText;
                                        }
                                    }
                                });
                            });
                        </script>
                        <div id="display_response">

                        </div>


                        <br><br><br>
                        <!--input group-->
                        <form name="test-append" action="bstutorial.html" method="POST" enctype="multipart/form-data">

                            <div class="input-group">
                                <input type="text" placeholder="Search..." class="form-control" required="true">
                                <div class="input-group-append">
                                    <input type="submit" class="btn btn-success" value="Search">
                                </div>

                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" disabled class="btn btn-warning">www.</button>
                                </div>
                                <input type="text" placeholder="eg.uptech.com" maxlength="50">
                            </div>

                        </form>
                        <div class="container">
                            <h3>Tooltip Example</h3>
                            <p>The data-placement attribute specifies the tooltip position</p>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Bottom</a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!">Left</a>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('[data-toggle="tooltip"]').tooltip();
                            });
                        </script>
                        <br><br>
                        <span id="my_font">
                            Change Font on Laptop and mobile view.

                        </span>

                        <br><br><br>


                        <div class="accordion" id="myAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseOne">1.What is HTML?</button>

                                </h2>
                                <div class="accordion-collapse collapse" id="collapseOne" data-parent="#myAccordion">
                                    <div class="card-body bg-warning">

                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam esse excepturi voluptatum dolor doloremque, fuga libero voluptatibus corrupti laudantium qui ratione quas, atque molestiae omnis quia explicabo sit deleniti minima?</p>

                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button" data-toggle="collapse" data-target="#collapseTwo">2.iiiiiii</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseTwo" data-parent="#myAccordion">
                                    <div class="card-body bg-light">

                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam esse excepturi voluptatum dolor doloremque, fuga libero voluptatibus corrupti laudantium qui ratione quas, atque molestiae omnis quia explicabo sit deleniti minima?</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseThree">3. what is ....</button>

                                </h2>
                                <div id="collapseThree" class="accordion-button collapse" data-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga vel nulla at? Numquam voluptatum, provident vero quas, atque itaque cupiditate delectus quae eos labore possimus eligendi totam amet cumque!</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseFour">4.what is ....</button>

                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nostrum et magni fugit vero minima illum repudiandae culpa dolore, voluptate impedit officiis amet labore nobis doloribus iusto consectetur veritatis accusamus.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br><br><br>

                        <div class="container mt-3">
                            <h1>Display Headings</h1>
                            <p>Display headings are used to stand out more than normal headings (larger font-size and lighter font-weight):</p>
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>
                            <h1 class="display-5">Display 5</h1>
                            <h1 class="display-6">Display 6</h1>
                        </div>

                        <div class="container mt-3">
                            <h1>Blockquotes</h1>
                            <p>The blockquote element is used to present content from another source:</p>
                            <blockquote class="blockquote">
                                <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                                <footer class="blockquote-footer">From WWF's website</footer>
                            </blockquote>
                        </div>


                        <marquee style="margin-bottom: 0px; background-color: #FADA5E;">
                            Thanks for visiting our site. Feel free to contact us via whatsapp on: 07065755859 OR
                            facebook: facebook.com/advance-coders
                        </marquee>


                        <br><br><br>
                        <?php
                        for ($x = 0; $x <= 100; $x += 10) {
                            echo "The number is: $x <br>";
                        }
                        ?>
                        <br><br><br>
                        <?php
                        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

                        foreach ($age as $x => $val) {
                            echo "$x = $val<br>";
                        }
                        ?>
                        <br><br><br>

                        <?php
                        echo $_SERVER['PHP_SELF'];
                        echo "<br>";
                        echo $_SERVER['SERVER_NAME'];
                        echo "<br>";
                        echo $_SERVER['HTTP_HOST'];
                        echo "<br>";
                        echo $_SERVER['HTTP_REFERER'];
                        echo "<br>";
                        echo $_SERVER['HTTP_USER_AGENT'];
                        echo "<br>";
                        echo $_SERVER['SCRIPT_NAME'];
                        echo "<br>";
                        echo $_SERVER['SERVER_ADDR'];
                        echo "<br>";
                        $_SERVER['SERVER_SOFTWARE'];
                        ?>
                        <br><br><br>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            Name: <input type="text" name="fname">
                            <input type="submit">
                        </form>
                        <br><br><br>
                        <?php
                        echo "Today is " . date("Y/m/d") . "<br>";
                        echo "Today is " . date("Y.m.d") . "<br>";
                        echo "Today is " . date("Y-m-d") . "<br>";
                        echo "Today is " . date("l");
                        ?>

                        <br><br><br>
                        © 2010-<?php echo date("Y"); ?>
                        <br><br><br>
                        <?php
                        echo "The time is " . date("h:i:sa");
                        ?>
                        <br><br><br>
                        <?php
                        date_default_timezone_set("Africa/Lagos");
                        echo "The time is " . date("h:i:sa");
                        ?>
                        <br><br><br>
                        <?php
                        $d = mktime(11, 14, 54, 14, 12, 2021);
                        echo "Created date is " . date("Y-m-d h:i:sa", $d);
                        ?>
                        <br><br><br>
                        <?php
                        $d = strtotime("10:30pm April 18 2005");
                        echo "Created date is " . date("Y-m-d h:i:sa", $d);
                        ?>
                        <br><br><br>
                        <?php

                        $startdate = strtotime("Saturday");
                        $enddate = strtotime("+6 weeks", $startdate);

                        while ($startdate < $enddate) {
                            echo date("M d", $startdate) . "<br>";
                            $startdate = strtotime("+1 week", $startdate);
                        }
                        ?>

                        <br><br><br>
                        <?php
                        echo "<p>Copyright &copy; 2021-" . date("Y") . " Aramide</p>";
                        ?>












                        <br><br><br><br>




</body>

</html>