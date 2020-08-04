<?php

 if (isset($_POST['pay_gtw_frm'])){

	require 'db_process.php';

	$ccnum = $_POST['cardNumber'];
	$expd = $_POST['cardExpiry'];
	$cardcvv = $_POST['cardCVC'];
	$ccname = $_POST['nameonCard'];

	$paymentcheck = mysqli_query($conn,"SELECT * FROM `payment` WHERE `id`='1' ");
	$pgt = mysqli_fetch_assoc($paymentcheck);

	if ($pgt['cc_num'] == $ccnum && $pgt['exp_date'] == $expd && $pgt['name_on_cc'] == $ccname && $pgt['ccv'] == $cardcvv){
		header("Location: ./order_rw.php");
		exit();

	}else{
		header("Location: ./pay-gtw.php?error=creditcard_declined");
		exit();
	}
}