<?php
session_start();
$status="";
$subtt =0;
$total_price=0;
$vat =0;
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}


?>


<head>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<title>Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome css-->
    <link href="fontawesome-free-5.7.2-web/fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet">
    <!-- Google font import-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200|Open+Sans:300|Ubuntu:300" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<style type="text/css">
	 @import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:400,700);
	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	a, abbr, acronym, address, big, cite, code,
	del, dfn, em, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td,
	article, aside, canvas, details, embed,
	figure, figcaption, footer, header, hgroup,
	menu, nav, output, ruby, section, summary,
	time, mark, audio, video {
	  margin: 0;
	  padding: 0;
	  border: 0;
	  font: inherit;
	  font-size: 100%;
	  vertical-align: baseline;
	}

	html {
	  line-height: 1;
	}

	ol, ul {
	  list-style: none;
	}

	table {
	  border-collapse: collapse;
	  border-spacing: 0;
	}

	caption, th, td {
	  text-align: left;
	  font-weight: normal;
	  vertical-align: middle;
	}

	q, blockquote {
	  quotes: none;
	}
	q:before, q:after, blockquote:before, blockquote:after {
	  content: "";
	  content: none;
	}

	a img {
	  border: none;
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
	  display: block;
	}

	* {
	  box-sizing: border-box;
	}

	body {
	  color: #333;
	  -webkit-font-smoothing: antialiased;
	  font-family: 'Ubuntu', sans-serif;
	}

	img {
	  max-width: 100%;
	}

	.cf:before, .cf:after {
	  content: " ";
	  display: table;
	}

	.cf:after {
	  clear: both;
	}

	.cf {
	  *zoom: 1;
	}

	.wrap {
	  width: 75%;
	  max-width: 960px;
	  margin: 0 auto;
	  padding: 5% 0;
	  margin-bottom: 5em;
	}

	.projTitle {
	  font-weight: bold;
	  text-align: center;
	  font-size: 2em;
	  padding: 1em 0;
	  letter-spacing: 3px;
	  text-transform: uppercase;
	}
	.projTitle span {
	  font-weight: normal;
	  font-style: italic;
	  text-transform: lowercase;
	  color: #777;
	}

	.flex-container {
	 display: flex;
	 border-bottom: 1px solid #dadada;
	}

	.flex-container > div {
	  width:20%;
	  height: 24px;
	  background-color: #f1f1f1;
	  margin: 10px 25px;
	  padding: 5px 15px;
	  font-size: 14px;
	  align-items: center;
	  justify-content: center;
	  text-align: center;
	  border-radius: 10px;
	}

	.flex-container > .checko{
	  background: #28a745;
	  color: #fff;
	}

	.heading {
	  padding: 1em 0;
	  border-bottom: 1px solid #D0D0D0;
	}
	.heading h1 {
	  font-size: 2em;
	  float: left;
	}
	.heading a.continue:link, .heading a.continue:visited {
	  text-decoration: none;
	  letter-spacing: -.015em;
	  font-size: .75em;
	  padding: 1em;
	  color: #fff;
	  background: #82ca9c;
	  font-weight: bold;
	  border-radius: 50px;
	  float: right;
	  text-align: right;
	  -webkit-transition: all 0.25s linear;
	  -moz-transition: all 0.25s linear;
	  -ms-transition: all 0.25s linear;
	  -o-transition: all 0.25s linear;
	  transition: all 0.25s linear;
	}
	.heading a.continue:after {
	  content: "\276f";
	  padding: .5em;
	  position: relative;
	  right: 0;
	  -webkit-transition: all 0.15s linear;
	  -moz-transition: all 0.15s linear;
	  -ms-transition: all 0.15s linear;
	  -o-transition: all 0.15s linear;
	  transition: all 0.15s linear;
	}
	.heading a.continue:hover, .heading a.continue:focus, .heading a.continue:active {
	  background: #f69679;
	}
	.heading a.continue:hover:after, .heading a.continue:focus:after, .heading a.continue:active:after {
	  right: -10px;
	}

	.tableHead {
	  display: table;
	  width: 100%;
	  font-size: .75em;
	}
	.tableHead li {
	  display: table-cell;
	  padding: 1em 0;
	  text-align: center;
	}
	.tableHead li.prodHeader {
	  text-align: left;
	}

	.cart {
	  padding: 1em 0;
	}
	.cart .items {
	  display: block;
	  width: 100%;
	  vertical-align: middle;
	  padding: 1.5em;
	  border-bottom: 1px solid #fafafa;
	}
	.cart .items.even {
	  background: #fafafa;
	}
	.cart .items .infoWrap {
	  display: table;
	  width: 100%;
	}
	.cart .items .cartSection {
	  display: table-cell;
	  vertical-align: middle;
	}
	.cart .items .cartSection .itemNumber {
	  font-size: .75em;
	  color: #777;
	  margin-bottom: .5em;
	}
	.cart .items .cartSection h3 {
	  font-size: 1em;
	  font-weight: bold;
	  text-transform: uppercase;
	  letter-spacing: .025em;
	}
	.cart .items .cartSection p {
	  display: inline-block;
	  font-size: .85em;
	  color: #777777;
	}
	.cart .items .cartSection p .quantity {
	  font-weight: bold;
	  color: #333;
	}
	.cart .items .cartSection p.stockStatus {
	  color: #82CA9C;
	  font-weight: bold;
	  padding: .5em 0 0 1em;
	  text-transform: uppercase;
	}
	.cart .items .cartSection p.stockStatus.out {
	  color: #F69679;
	}
	.cart .items .cartSection .itemImg {
	  width: 4em;
	  float: left;
	}
	.cart .items .cartSection.qtyWrap, .cart .items .cartSection.prodTotal {
	  text-align: center;
	}
	.cart .items .cartSection.qtyWrap p, .cart .items .cartSection.prodTotal p {
	  font-weight: bold;
	  font-size: 1.25em;
	}
	.cart .items .cartSection input.qty {
	  width: 2em;
	  text-align: center;
	  font-size: 1em;
	  padding: .25em;
	  margin: 1em .5em 0 0;
	}
	.cart .items .cartSection .itemImg {
	  width: 8em;
	  display: inline;
	  padding-right: 1em;
	}

	.special {
	  display: block;
	}
	.special .specialContent {
	  padding: 1em 1em 0;
	  display: block;
	  margin-top: .5em;
	  border-top: 1px solid #dadada;
	}
	.special .specialContent:before {
	  content: "\21b3";
	  font-size: 1.5em;
	  margin-right: 1em;
	  color: #6f6f6f;
	}

	a.remove{
	  text-decoration: none;
	  color: #ffffff;
	  font-weight: bold;
	  background: #e0e0e0;
	  padding: .5em;
	  font-size: .75em;
	  display: inline-block;
	  border-radius: 100%;
	  line-height: .85;
	  -webkit-transition: all 0.25s linear;
	  -moz-transition: all 0.25s linear;
	  -ms-transition: all 0.25s linear;
	  -o-transition: all 0.25s linear;
	  transition: all 0.25s linear;
	}
	.remove button{
		border-radius: 100%;
		background: #f30;
		cursor: pointer;
	}
	a.remove:hover {
	  background: #f30;
	}

	.promoCode {
	  border: 2px solid #efefef;
	  float: left;
	  width: 35%;
	  padding: 2%;
	}
	.promoCode label {
	  display: block;
	  width: 100%;
	  font-style: italic;
	  font-size: 1.15em;
	  margin-bottom: .5em;
	  letter-spacing: -.025em;
	}
	.promoCode input {
	  width: 85%;
	  font-size: 1em;
	  padding: .5em;
	  float: left;
	  border: 1px solid #dadada;
	}
	.promoCode input:active, .promoCode input:focus {
	  outline: 0;
	}
	.promoCode a.btn {
	  float: left;
	  width: 15%;
	  padding: .75em 0;
	  border-radius: 0 1em 1em 0;
	  text-align: center;
	  border: 1px solid #82ca9c;
	}
	.promoCode a.btn:hover {
	  border: 1px solid #f69679;
	  background: #f69679;
	}

	.btn:link, .btn:visited {
	  text-decoration: none;
	  letter-spacing: -.015em;
	  font-size: 1em;
	  padding: 1em 3em;
	  color: #fff;
	  background: #82ca9c;
	  font-weight: bold;
	  border-radius: 50px;
	  float: right;
	  text-align: right;
	  -webkit-transition: all 0.25s linear;
	  -moz-transition: all 0.25s linear;
	  -ms-transition: all 0.25s linear;
	  -o-transition: all 0.25s linear;
	  transition: all 0.25s linear;
	}
	.btn:after {
	  content: "\276f";
	  padding: .5em;
	  position: relative;
	  right: 0;
	  -webkit-transition: all 0.15s linear;
	  -moz-transition: all 0.15s linear;
	  -ms-transition: all 0.15s linear;
	  -o-transition: all 0.15s linear;
	  transition: all 0.15s linear;
	}
	.btn:hover, .btn:focus, .btn:active {
	  background: #f69679;
	}
	.btn:hover:after, .btn:focus:after, .btn:active:after {
	  right: -10px;
	}
	.promoCode .btn {
	  font-size: .85em;
	  paddding: .5em 2em;
	}

	/* TOTAL AND CHECKOUT  */
		.subtotal {
		  float: right;
		  width: 35%;
		}
		.subtotal .totalRow {
		  padding: .5em;
		  text-align: right;
		}
		.subtotal .totalRow.final {
		  font-size: 1.25em;
		  font-weight: bold;
		}
		.subtotal .totalRow span {
		  display: inline-block;
		  padding: 0 0 0 1em;
		  text-align: right;
		}
		.subtotal .totalRow .label {
		  font-size: .85em;
		  text-transform: uppercase;
		  color: #777;
		}
		.subtotal .totalRow .value {
		  letter-spacing: -.025em;
		  width: 35%;
		}

		@media only screen and (max-width: 39.375em) {
		  .wrap {
		    width: 98%;
		    padding: 2% 0;
		  }

		  .projTitle {
		    font-size: 1.5em;
		    padding: 10% 5%;
		  }

		  .heading {
		    padding: 1em;
		    font-size: 90%;
		  }

		  .cart .items .cartSection {
		    width: 90%;
		    display: block;
		    float: left;
		  }
		  .cart .items .cartSection.qtyWrap {
		    width: 10%;
		    text-align: center;
		    padding: .5em 0;
		    float: right;
		  }
		  .cart .items .cartSection.qtyWrap:before {
		    content: "QTY";
		    display: block;
		    padding: .25em;
		    font-size: .75em;
		  }
		  .cart .items .cartSection.prodTotal, .cart .items .cartSection.removeWrap {
		    display: none;
		  }
		  .cart .items .cartSection .itemImg {
		    width: 25%;
		  }

		  .promoCode, .subtotal {
		    width: 100%;
		  }

		  a.btn.continue {
		    width: 100%;
		    text-align: center;
		  }

		}

		/* card payment side page */
		.wp {
		  margin: 50px auto;
		  width: 400px;
		}

		/* CSS for Credit Card Payment form */
		.credit-card-box .panel-title {
		  display: inline;
		  font-weight: bold;
		}
		.credit-card-box .form-control.error {
		  border-color: red;
		  outline: 0;
		  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
		}
		.credit-card-box label.error {
		  font-weight: bold;
		  color: red;
		  padding: 2px 8px;
		  margin-top: 2px;
		}
		.credit-card-box .payment-errors {
		  font-weight: bold;
		  color: red;
		  padding: 2px 8px;
		  margin-top: 2px;
		}
		.credit-card-box label {
		  display: block;
		}
		/* The old "center div vertically" hack */
		.credit-card-box .display-table {
		  display: table;
		}
		.credit-card-box .display-tr {
		  display: table-row;
		}
		.credit-card-box .display-td {
		  display: table-cell;
		  vertical-align: middle;
		  width: 50%;
		}
		/* Just looks nicer */
		.credit-card-box .panel-heading img {
		  min-width: 180px;
		}




	</style>
	<main>
		  <div class="wrap cf">
		  <h1 class="projTitle">Checkout</h1>
		  <div class="flex-container">
			  <div class="checko">Checkout</div>
			  <div class="checko">Payment</div>
			  <div>Place order</div> 
			  <div>Order-confirmation</div>  
		  </div>
		  <!-- CREDIT CARD FORM STARTS HERE -->
		    <div class="wp">
			<div class="container">
			<div class="row">
			<!-- You can make it whatever width you want. I'm making it full width
			on <= small devices and 4/12 page width on >= medium devices -->
			<div class="col-xs-12 col-md-4">

			<?php
	            if (isset($_GET['error'])) {
	             if ($_GET['error']=="creditcard_declined") {
	               echo '<div class="alert alert-danger">
				    <strong>Sorry,</strong> your credit card was declined
				  </div>';
	             }
	           }

		  ?>



			<!-- CREDIT CARD FORM STARTS HERE -->
	    <form action="payment_process.php" method="POST">
			<div class="panel panel-default credit-card-box">
			<div class="panel-heading display-table" >
			<div class="row display-tr" >
			<h3 class="panel-title display-td" >Payment Details</h3>
			<div class="display-td" >                            
			<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
			</div>
			</div>                    
			</div>
			<div class="panel-body">
			<form role="form" id="payment-form">
			<div class="row">
			<div class="col-xs-12">
			<div class="form-group">
			<label for="cardNumber">CARD NUMBER</label>
			<div class="input-group">
			<input 
			type="tel"
			class="form-control"
			name="cardNumber"
			placeholder="Valid Card Number"
			autocomplete="cc-number"
			required autofocus 
			maxlength="16" 
			/>
			<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
			</div>
			</div>                            
			</div>
			</div>
			<div class="row">
			<div class="col-xs-7 col-md-7">
			<div class="form-group">
			<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
			<input 
			type="tel" 
			class="form-control" 
			name="cardExpiry"
			placeholder="MM / YY"
			autocomplete="cc-exp"
			required 
			/>
			</div>
			</div>
			<div class="col-xs-5 col-md-5 pull-right">
			<div class="form-group">
			<label for="cardCVC">CV CODE</label>
			<input 
			type="tel" 
			class="form-control"
			name="cardCVC"
			placeholder="CVC"
			autocomplete="cc-csc"
			maxlength="4" 
			required
			/>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-xs-12">
			<div class="form-group">
			<label for="nameonCard">NAME ON CARD</label>
			<input type="text" name="nameonCard" class="form-control" />
			</div>
			</div>                        
			</div>
			<div class="row">
			<div class="col-xs-12">
			<button class="btn btn-success btn-lg btn-block" type="submit" name="pay_gtw_frm">Pay</button>
			</div>
			</div>
			<div class="row" style="display:none;">
			<div class="col-xs-12">
			<p class="payment-errors"></p>
			</div>
			</div>
			</form>
			</div>
			</div>            



			</div>            



			</div>
			</div>
		    </div>
	    </form>

		<!-- CREDIT CARD FORM ENDS HERE -->

</main>