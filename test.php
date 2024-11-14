<?php
session_start();
include "php/isset.php";
include 'php/subject.php';
include 'card.php'
?>

<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="../assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class="main-wrapper">
    <?php include 'includes/sidenav.php'; ?>

    <!-- partial:partials/_sidebar.html -->

    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../demo1/dashboard.html">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../demo2/dashboard.html">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      <?php include 'includes/topnav.php' ?>
      <!-- partial -->

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h6 class="card-title mt-3">Data Table</h6>
                <button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">Add Subject</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Image</th>
                        <th>Edit / Delete</th>
                        <th>Print</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $inc = 1;
                      $display_all_from_db = mysqli_query($connect, "SELECT * FROM info");
                      while ($row = mysqli_fetch_assoc($display_all_from_db)) {
                      ?>
                        <tr>
                          <td><?php echo $inc; ?></td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['class'] ?></td>
                          <td><img src="<?php echo $row['image'] ?>"></td>
                          <td>
                            <input type="hidden" id="editn" value="<?= $row['name'] ?>">
                            <input type="hidden" id="edit" value="<?= $row['class'] ?>">
                            <button type="button" name="get_edit" id="<?= $row['id'] ?>" data-bs-target="#varyingModalEdit" data-bs-toggle="modal" id="<?= $row['id'] ?>" class="btn btn-warning btn-sm btnEdit btn-icon-text mb-2 me-2 mb-md-0">
                              <i class="btn-icon-prepend" data-feather="edit"></i>
                              Edit </button> <br><br>

                            <form action="" method="post">
                              <input type="hidden" name="get_id" value="<?= $row['id'] ?>">
                              <button type="submit" name="get_delete" id="<?= $row['id'] ?>" class="btn btn-danger btn-sm btn-icon-text me-2  mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="delete"></i>
                                Delete</button>
                            </form>
                          </td>
                          <td>

                            <button type="submit" name="get_print" data-bs-target="#varyingModalPrint" data-bs-toggle="modal" class="btn btn-success btn-icon-text me-2 mb-2 mb-md-0 mt-2">
                              <i class="btn-icon-prepend" data-feather="printer"></i>
                              Print
                            </button>

                          </td>

                          <!-- <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td> -->
                        </tr>
                      <?php
                        $inc++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- register modal -->
      <div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyingModalLabel">Add Subject</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <form class="forms-sample" action="" method="POST">
              <div class="modal-body">
                <div class="d-flex text-center justify-content-center align-items-center">
                  <div>
                    <!-- This is your border box   -->
                    <div style=" width:240px;height: 240px; border: radius 15px; " class="mb-2">
                      <img id="output1344" src="img/avatar (2).jpg" alt="" style="width: 240px; height:240px;">
                      <br>
                      <!-- THIS PASTES THE PICTURE TO THE BORDER BOX -->
                    </div>

                    <!-- THIS GRABS THE NAME OF THE IMAGE -->
                    <div class="custom-file mb-5" style="width: 200px;">
                      <input type="file" class="custom-file-input" id="file1344" onchange="loadFile1344(event)" name="fileToUpload" accept="image/*">
                      <label class="custom-file-label" for="customFile"></label>
                    </div>

                  </div>
                </div>
                <script>
                  var loadFile1344 = function(event) {
                    var my_image = document.getElementById('output1344');
                    var fi = document.getElementById('file1344');
                    if (fi.files.length > 0) {
                      my_image.src = URL.createObjectURL(event.target.files[0]);
                    }
                  };
                </script>
                <input type="hidden" name="get_id" value="" name="old_name">

                <div class="mb-3">
                  <label for="exampleInputUsername1" class="form-label" style=" font-size: 14px; font-weight:bold; font-family:sans-serif;">Enter Name*</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="get_name" placeholder="Joy Patrick" required value="">

                </div>
                <div class="mb-3">
                  <label for="class" class="form-label" style=" font-size: 14px; font-weight:bold; font-family:sans-serif;">Class*</label>
                  <select class="form-select" name="get_class" value="" required>
                    <option selected disabled class="text-muted" required>Select your class</option>
                    <option value="JSS 1">JSS 1</option>
                    <option value="JSS 2">JSS 2</option>
                    <option value="JSS 3">JSS 3</option>
                    <option value="SSS 1">SSS 1</option>
                    <option value="SSS 2">SSS 2</option>
                    <option value="SSS 3">SSS 3</option>
                  </select>

                </div>
                <button type="submit" class="btn btn-primary" name="get_btn">Submit</button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary d-none" id="sub" name="subjectbtn">Submit</button>
                <button type="button" class="btn btn-primary" id="subjectbtn">Proceed</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- register modal ends -->
      <!-- MODAL FOR EDIT -->
      <div class="modal fade" id="varyingModalEdit" tabindex="-1" aria-labelledby="varyingModalLabelEdit" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="font-weight:bold;font-size: 30px; font-family:sans-serif;" id="varyingModalLabelEdit">EDIT</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">

              <form action="report.php" class="forms-sample" method="POST" enctype="multipart/form-data">
                <div class="d-flex text-center justify-content-center align-items-center">

                  <div>
                    <!-- This is your border box   -->
                    <div style=" width:240px;height: 240px; border: radius 15px;" class="mb-2">
                      <img id="output1345" src="img/avatar (2).jpg " alt="" style="width: 240px; height:240px">
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
                      <input type="file" class="custom-file-input" id="file1345" onchange="loadFile1345(event)" name="fileToUploadEdit" accept="image/*">
                      <label class="custom-file-label" for="customFile"></label>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputUsername1" class="form-label" style=" font-size: 14px; font-weight:bold; font-family:sans-serif;">Enter Name*</label>
                  <input type="text" class="form-control" id="editname" autocomplete="off" name="get_nameEdit" placeholder="Joy Patrick" required value="<?= $get_name ?>">
                  <input type="hidden" name="get_idEdit" id="user_id" value="">
                </div>
                <div class="mb-3">
                  <label for="class" class="form-label" style=" font-size: 14px; font-weight:bold; font-family:sans-serif;">Class*</label>
                  <select class="form-select" name="get_classEdit" id="edit_class" required>
                    <option class="text-muted">Select your class</option>
                    <option value="JSS 1">JSS 1</option>
                    <option value="JSS 2">JSS 2</option>
                    <option value="JSS 3">JSS 3</option>
                    <option value="SSS 1">SSS 1</option>
                    <option value="SSS 2">SSS 2</option>
                    <option value="SSS 3">SSS 3</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="get_btnEdit">Submit</button>


              </form>
            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF MODAL FOR EDIT BUTTON -->
      <!-- MODAL FOR PRINT BUTTON -->

      <div class="modal fade" id="varyingModalPrint" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Print</h5>
              <button type="button" class="btn-close" name="get_print" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <form action="" method="POST">
              <div class="modal-body">
                <div class="mb-3">
                  <!-- <label for="print" class="form-label">Print</label> -->

                  <input type="text" name="get_name" class="form-control" placeholder="Name:" required><br>

                  <!-- <input type="text"  name="get_year" class="form-control" placeholder="Year:"><br> -->

                  <select class="form-select" name="get_year" id="" required>
                    <option class="text-muted">Select Year</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                  <br>

                  <select class="form-select" name="get_class" id="edit_clas" required>
                    <option class="text-muted">Select your class</option>
                    <option value="JSS 1">JSS 1</option>
                    <option value="JSS 2">JSS 2</option>
                    <option value="JSS 3">JSS 3</option>
                    <option value="SSS 1">SSS 1</option>
                    <option value="SSS 2">SSS 2</option>
                    <option value="SSS 3">SSS 3</option>
                  </select>
                  <br>
                  <!-- <input type="date"  name="get_date" class="form-control" placeholder="Date:"><br> -->

                  <select class="form-select" name="term" id="term">
                    <option value="select">Select Term</option>
                    <option value="first term">First Term</option>
                    <option value="second term">Second Term</option>
                    <option value="third trem">Third Term</option>
                  </select>

                  <br><br>
                  <select class="form-select" id="selectBox">
                    <option value="subjectpack">Subject Pack</option>
                    <?php
                    $check_name_indb = mysqli_query($connect, "SELECT * FROM subject");

                    while ($row = mysqli_fetch_assoc($check_name_indb)) {
                      $fetch_print = $row['subjectPack'];
                      $subno = $row['subjectno'];
                      echo '<option value="' . $subno . '" >' . $fetch_print . '</option>';
                    }
                    ?>
                  </select>
                  <input type="hidden" id="setSelect" name="get_print">
                  <div class="form-group" id="score">

                  </div>


                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="get_printt">Submit</button>


              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- END OF MODAL FOR PRINT BUTTON -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
        <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->

  <script src="../assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="../assets/vendors/feather-icons/feather.min.js"></script>
  <script src="../assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="../assets/js/data-table.js"></script>
  <!-- End custom js for this page -->
  <script src="./custom/js/subject.js"></script>
    <!-- End custom js for this page -->
    <script>
    $(document).ready(function() {
      $('body').on('change', '#selectBox', function(e) {
        e.preventDefault();
        number = $('#selectBox :selected').val()
        text = $('#selectBox :selected').text()
        $("#setSelect").val(text);
        console.log(number)
        console.log(text)
        input = '';
        for (let index = 0; index < number; index++) {
          input += '<div class="mb-3"><label for="Score" class="form-label">Score</label><input type="text" class="form-control" id="score' + index + '" name="score' + index + '" placeholder=" Enter Score"></div>';
          console.log(input);
          $('#score').html(input);

        }
      });

      $('body').on('click', '.btnEdit', function(e) {
        e.preventDefault();
        edit = $(this).attr('id');
        console.log(edit);
        $.ajax({
          type: "POST",
          url: "php/subject.php",
          data: {
            edit: edit
          },
          success: function(response) {
            console.log(response)
            data = JSON.parse(response)
            $("#user_id").val(data.id);
            $("#editname").val(data.name);
            $("#edit_class").val(data.class);
            $("#output1345").attr('src', '' + data.image + '');

          }
        });
        // editn = $("#editn").val();
        // edit = $("#edit").val();
        // console.log(id);
        // $("#user_id").val(id);
        // $("#editname").val(editn);
        // $("#edit_class").val(edit);
      });

      $("#get_delete").click(function() {
        // alert('HI WELCOME');
        var get_name = document.getElementById('get_name').value;
        var get_delete = confirm('Are you sure you want to delete' + " " + $get_name + " " + 'from the database?');
        if (get_delete === true) {
          alert(get_name + " " + 'is now deleted');
          return true;
        } else {
          return false;
        }
      })
    });
  </script>
  <?= $swallogin ?>
</body>

</html>