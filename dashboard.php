	<?php 
	 require 'header.php';

	 require 'db_process.php';
     
     if(!isset($_SESSION['userid'])){
	   header("Location: ./index.php");
	   exit();
	}

	 ?>

	 <main>

	 <div class="dashboard">
	 <aside class="search-wrap">
		<div class="search">
			<?php
	   	$userid = $_SESSION['userid'];
		$getinfo = "SELECT * FROM users WHERE userid = '$userid'";
		$res = mysqli_query($conn, $getinfo);
		$row = mysqli_fetch_assoc($res);

		echo '<h1 class="text-center wel_note">Welcome back,'.' '.$row['username'].'!'.'</h1>';

		?>
            
		</div>
	</aside>
	
	<header class="menu-wrap">
	
		<nav>
			<section class="dicover">
				<h3 class="dtxt">Profile</h3>
				
				<ul>
					<li>
						<a href="#">
							<i class="fas fa-envelope fa-lg ups"></i>
							<span class="dtxt">Email</span>
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="fas fa-unlock fa-lg ups"></i>
							<span class="dtxt">Password</span>
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="far fa-address-book fa-lg ups"></i>
							<span class="dtxt">Address</span>
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="fas fa-wallet fa-lg ups"></i>
							<span class="dtxt">Payment</span>
						</a>
					</li>
				</ul>
			</section>
		</nav>
	</header>
	
	<div class="content-wrap">
		<header class="content-head">
			<h1>Overview</h1>
				
		</header><hr class="o_i">
		
		<div class="content">
			<section class="info-boxes">

				
				<div class="info-box">
                    <h1 class="info">Orders</h1>
					<br><div class="box-icon">
						<i class="fas fa-cubes fa-3x"></i>
					</div>
					
					<div class="box-content">
						<span class="big">15</span>
						books
					</div>
				</div>
				
				<div class="info-box">
                    <h1 class="info">Payment method</h1>
					<div class="box-icon">
						<i class="fas fa-wallet fa-3x"></i>
					</div>
					
					<div class="box-content">
						<span class="big">15</span>
						MOMO
					</div>
				</div>
				
				<div class="info-box">
                    <h1 class="info">Books Read</h1>
					<div class="box-icon">
						<i class="fas fa-book-reader fa-3x"></i>
					</div>
					
					<div class="box-content">
						<span class="big">30</span>
						Completed
					</div>
				</div>
			</section>
		</div>
	 	
	   
	   	
	 </div>
	</div>
</main>

	 <?php
	   require 'footer.php';
	 ?>