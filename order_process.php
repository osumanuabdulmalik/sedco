<?php
require 'db_process.php';
include 'payment_process.php';
?>

<?php
if(isset($_SESSION['userid'])){
$paymentcheck = mysqli_query($conn,"SELECT * FROM `payment` WHERE `id`='1' ");
$pgt = mysqli_fetch_assoc($paymentcheck);

$ccfour =  str_pad(substr($pgt['cc_num'], -4), strlen($pgt['cc_num']), '*', STR_PAD_LEFT);

$user_id = $_SESSION['userid'];

$order_date = date("Y/m/d");

$order_number = 'SED-'. time();

$order_details = mysqli_query($conn, "INSERT INTO orders (Order_num,Order_status,Order_date,userid) VALUES ('$order_number','1','$order_date','$user_id')");


}

?>