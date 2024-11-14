<?php 

if (!isset($_SESSION['eat'])) {
    header('location: eatly.php');
}