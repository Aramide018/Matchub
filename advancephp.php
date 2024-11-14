<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
<body  class="container">
    <h2>PHP Variables</h2>
    <?php
    $my_name = 'James';
    echo $my_name;
    echo "<br>";
    echo "<b style= 'color:green;'>Rufus</b>";
    echo "<h4>My name is $my_name</h4>";
    echo "<br>";
    $x = 5;
    $y = 3;
    $z1 = $x + $y;
    $z2 = $x - $y;
    $z3 = $x * $y;
    $z4 = $x / $y;
    
    echo "N".$z4;
    echo "<br>";
    echo round($z4 , 2);
    echo '<br>';
    echo "Give to owner" .ceil($z4);
    echo "<br>";
    echo "Give to debtor".floor($z4);
    echo "<br>";
    $code_name = mt_rand(10000 , 99999);
    echo "<br>";
    echo $code_name;
    echo "<br>";
    $uba = mt_rand(1000000 , 9999999);
    $bank_code = "213";
    echo $bank_code.$uba; 

    $answer = 0;

    if(isset($_POST['calc'])) {
        $first_num = str_replace(",", "" ,  $_POST['first_num']);
        $operator = $_POST['operator'];
        $second_num = str_replace("," ,"" , $_POST['second_num']);


        if($operator == "+") {
            $answer = $first_num + $second_num;
        }

        if($operator == "-"){
            $answer = $first_num - $second_num;
        }

        if($operator == "/") {
            $answer = $first_num / $second_num;
        }

        if($operator == "*") {
            $answer = $first_num * $second_num;
        }

        if($first_num === "" && $second_num ===  "") {
            $answer = 0;
            echo "<script>window.location = 'advancephp.php' <script>";
        }
    } 
    ?>
    <br><br>


     <form action="advancephp.php" method="POST">
    <h3>PHP CALCULATOR</h3>
    <input type="text" onchange="FormatCurrency(this)" onkeypress="CheckNumeric()" onkeyup="FormatCurrency(this)" required placeholder="enter first number" name="first_num" class="form-control" maxlength="20">
    <br><br>
    <select name="operator" required class="form-control">
        <option value="" hidden selected disabled>Select Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>
    <input type="text" onchange="FormatCurrency(this)" onkeypress="return CheckNumeric()" onkeyup="FormatCurrency(this)" required placeholder="enter second number" name="second_num" class="form-control" maxlength="20">
    <br>
    <button type="submit" name="calc" class="btn btn-success">CALCULATE</button>

    <div>
        <?php  echo "<h5>". number_format($answer, 2)."</h5>" ?>
    </div>
     </form>
     <?php echo "<h5>".number_format($answer)."</h5>"; ?>

   <?php
   echo "<br><br>";
   // LOOPING NUMBERS

   for ($x=1; $x <= 50 ; $x++) {
    echo $x. "<br>";
    
    
}
echo "<br><br>";
date_default_timezone_set("Africa/Lagos");
echo date('Y-m-d');
echo "<br><br>";
echo date('jS F Y' );
echo "<br><br>";
echo date('D M Y');
echo "<br><br>";
echo date('l d F Y');
echo "<br><br>";
echo date('h:ia');
echo "<br><br>";
echo date('H:i');
echo "<br><br>";
   
    $new_year = "1st January 2023";
    echo $new_year_seconds = strtotime($new_year);
    $today = date('jS F Y');
    echo "<br>";
    echo $today_seconds = strtotime($today);
    echo "<br>";
    echo $days_diff_seconds = $new_year_seconds - $today_seconds;
    $days_diff = $days_diff_seconds / 86400;
    echo "<br>";
    echo $days_diff."days to New Year 2023. Please plan your life well.";
    echo "<br>";
    if($days_diff == 0){
        echo "<script>alert('HAPPY NEW YEAR!!!')</script>";
    }
    
    // PHP In-Built Function
    function dollar_to_naira($dollar) {
      $naira =  $dollar * 450;
      return "N". number_format($naira, 2);
    }
       echo "<br>";
    echo dollar_to_naira(1200);
    echo "<br>";
    echo "<br>";

    function naira_to_dollar($naira) {
        $dollar = $naira / 450;
        return "$".number_format($dollar, 2) ;
    }
    echo "<br><br>";
    echo naira_to_dollar(1000);
    echo "<br><br>"; 

    function area_rectangle($length, $breadth) {
        $area_rec = $length * $breadth;
        return $area_rec."<sup>2</sup>";
    }

    echo "<br><br>";
    echo area_rectangle(5 , 2);
    echo "<br><br>";

   ?>
   <br><br>
   <script>  ////////////////////// Format number with commas ///////////////////////////

   function FormatCurrency(ctrl) {
    // Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys //

    if (event.keyCode === 37 || event.keyCode === 38 || event.keyCode === 39 || event.keyCode === 40  ) {
        return;
    }
    var val = ctrl.value;

    val = val.replace(/,/g, "")
    ctrl.value = "";
    val += '';
    x = val.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : ' ';

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    ctrl.value = x1 + x2;
   }

   function checkNumeric() {
    return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
   }

   </script>



    
</body>
</html>