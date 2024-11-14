<?php
$connect = mysqli_connect('localhost', 'root' , '', 'advance');

    $from = $_GET['from_var'];
    $to = $_GET['to_var'];
?>
<br><br>
  <h2>Registered Members From <?php echo $from . " - " . $to ?></h2>
<?php
    $display_between = mysqli_query($connect, "SELECT SUM(amount) as total_sum FROM register WHERE datesub  BETWEEN '$from' AND '$to'");
    // echo "Error message:" . mysqli_error($connect);
    while ($row = mysqli_fetch_assoc($display_between)) {
            $get_sum = $row['total_sum'];
    }
    echo"<h3>₦".number_format($get_sum)."</h3>";
?>


    
   