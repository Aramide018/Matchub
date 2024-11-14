<?php
include 'connect.php';
$find_id = $find_name = $find_email = $find_sub = $find_msg = $find_image = "";

if (isset($_POST['src_name'])) {
    $search = $_POST['search'];
    $check_search = mysqli_query($connect, "SELECT * FROM contact WHERE name = '$search'");
    while ($row = mysqli_fetch_assoc($check_search)) {
        $find_id = $row['id'];
        $find_name = $row['name'];
        $find_email = $row['email'];
        $find_sub = $row['subject'];
        $find_msg = $row['message'];
        $find_image = $row['images'];
    }
    if ($find_name == "") {
        echo "<script>alert('$find_name does not exists')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <form action="contact.php" class="was-validated" method="POST">
        <div class="form-group input-group">
            <input list="data" name="search" class="form-control" autocomplete="off" placeholder="type name to search">
            <datalist id="data">
                <?php
                $get_all_name = mysqli_query($connect, "SELECT * FROM contact");
                while ($row = mysqli_fetch_assoc($get_all_name)) {
                ?>
                    <option value="<?php echo $row['name'] ?>">
                    <?php
                }
                    ?>

            </datalist>
            <!-- <input type="text" name="search" id="" class="form-control" placeholder="" aria-describedby="helpId"> -->
            <div class="input-group append">
                <button class="btn btn-success" name="src_name">SEARCH</button>
            </div>
        </div>
        <h1 class="text-center ">Contact Form</h1>
    </form>
    <form action="contact.php" class="was-validated" method="POST" enctype="multipart/form-data">
        <div class="float-right">
            <input type="hidden" value="<?php echo $find_image ?>" name="old_name">
            <!-- This is your border box   -->
            <div style="border: 2px #26baee solid; width:240px;height: 240px; border: radius 15px;" class="mb-2">
                <img id="output1344" src="<?= $find_image ?>" alt="CLICK 'BROWSE' TO UPLOAD PASSPORT" required style="width: 240px; height:240px">
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
                <label class="custom-file-label" for="customFile">Choose File </label>
            </div>

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <input type="hidden" name="get_id" value="<?php echo $find_id ?>" name="old_name">
        <label for="name">Name:</label>
        <input type="text" placeholder="John doe" name="get_name" value="<?php echo $find_name; ?>" required class="form-control">
        <br>
        <label for="email">Email:</label>
        <input type="email" placeholder="johndoe@gmail.com" name="get_email" value="<?php echo $find_email; ?>" required class="form-control">

        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="get_sub" class="form-control" placeholder="..." required value="<?php echo $find_sub; ?>">
        <br>
        <label for="message">Message</label>
        <textarea name="get_msg" cols="20" rows="S" class="form-control" required maxlength="500"><?php echo $find_msg; ?></textarea>
        <br>
        <button type="submit" name="get_submit" class="btn btn-primary">SUBMIT</button>
        <button type="submit" class="btn btn-success" style=" border-radius: 8px;" name="get_update">UPDATE</button>
        &nbsp;&nbsp;
        <button type="submit" id="get_delete" name="get_delete" class="btn btn-danger" style=" border-radius: 8px;">DELETE</button>
    </form>
    <script>
        $(document).ready(function() {
            $("#get_delete").click(function() {
                var get_name = document.getElementById('get_name').value;
                var get_delete = confirm('Are you sure you want to delete' + " " + get_name + " " + 'from the database?');
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
        $delete_from_db = mysqli_query($connect, "DELETE FROM contact WHERE id = '$get_id'");

        if ($delete_from_db === true) {
            echo "<script>alert('$get_name has been successfully deleted')</script>";
        }
    }
    ?>
    <?php

    if (isset($_POST['get_submit'])) {
        $get_name = $_POST['get_name'];
        $get_email = $_POST['get_email'];
        $get_sub = $_POST['get_sub'];
        $get_msg = $_POST['get_msg'];

        $fetch_name = "";
        $check_name_indb = mysqli_query($connect, "SELECT * FROM contact WHERE name = '$get_name'");
        while ($row = mysqli_fetch_assoc($check_name_indb)) {
            $fetch_name = $row['name'];
        }
        echo $fetch_name;


        if ($fetch_name == "") {
            $passportt = "passportt/" . $_FILES['fileToUpload']['name'];
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $passportt);

            $insert_to_db = mysqli_query($connect, "INSERT INTO contact (name, email, subject, message,images) VALUES('$get_name', '$get_email', '$get_sub', '$get_msg','$passportt')");
            if ($insert_to_db == true) {
                echo "<script>alert('$get_name is now registered in the database')</script>";
            } else {
                echo "<script>alert('An error has occured')</script>";
            }
        } else {
            echo "<script>alert('$get_name already exists in the database')</script>";
        }

        // $fetch_email = "";
        // $check_email_indb = mysqli_query($connect , "SELECT * FROM contact WHERE email = '$get_email' AND name = '$get_name'");
        // while($row = mysqli_fetch_assoc($check_email_indb)) {
        //     $fetch_email = $row['email'];
        // }
        // echo $fetch_email;

        // if($fetch_email == "") {
        //     $insert_to_db = mysqli_query($connect, "INSERT INTO contact (name, email, subject, message) VALUES('$get_name', '$get_email', '$get_sub', '$get_msg')");
        //     if($insert_to_db == true) {
        //         echo "<script>alert('$get_email is now registered in the database')</script>";
        //     } else {
        //         echo "<script>alert('An error has occured')</script>";

        //     }
        // } else {
        //     echo "<script>alert('$get_email already exists in the database')</script>";
        // }


    };



    if (isset($_POST['get_update'])) {
        $get_id = $_POST['get_id'];
        $get_name = $_POST['get_name'];
        $get_email = $_POST['get_email'];
        $get_sub = $_POST['get_sub'];
        $get_msg = $_POST['get_msg'];

        if (empty($_FILES['fileToUpload']['name'])) {
            $image_name = $_POST['old_name'];
        } else {
            $image_name = "passportt/" . $_FILES['fileToUpload']['name'];
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $image_name);
        }


        $update_to_db = mysqli_query($connect, "UPDATE contact SET name = '$get_name', email = '$get_email', subject = '$get_sub', message = '$get_msg',images ='$image_name' WHERE id = '$get_id'");
        if ($update_to_db == true) {
            echo "<script>alert('$get_name has successfully been updated')</script>";
        }
    }




    ?>



</body>

</html>