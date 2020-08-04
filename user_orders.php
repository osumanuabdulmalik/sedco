	<?php 
	 require 'header.php';

	 require 'db_process.php';
     
     if(!isset($_SESSION['userid'])){
	   header("Location: ./index.php");
	   exit();
	}

	if(isset($_SESSION['userid'])){
	$user = $_SESSION['userid'];
	$pullorders = mysqli_query($conn,"SELECT * FROM `orders` WHERE `userid`='$user' ");
	$smtmt = mysqli_fetch_assoc($pullorders);
    }



	 ?>

	 <main>

	 <table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Order Number</th>
	      <th scope="col">Order Date</th>
	      <th scope="col">Price</th>
	      <th scope="col">Order status</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Mark</td>
	      <td>Otto</td>
	      <td>@mdo</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>
</main>

	 <?php
	   require 'footer.php';
	 ?>