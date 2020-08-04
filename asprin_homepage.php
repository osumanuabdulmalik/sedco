<?php
  session_start();
  
include('db_process.php');
$status="";
$cart_count="0";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['nameo_of_arthur'];
$title = $row['title_of_book'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
$cartArray = array(
  $code=>array(
  'nameo_of_arthur'=>$name,
  'title_of_book'=>$title,
  'code'=>$code,
  'price'=>$price,
  'quantity'=>1,
  'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}else{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($code,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";  
  } else {
  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
  $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }
}

if(!empty($_SESSION["shopping_cart"])) {
  $cart_count = count(array_keys($_SESSION["shopping_cart"]));
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sedco Bookstore</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- font awesome css-->
    <link href="fontawesome-free-5.7.2-web/fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/dashboard-main.css" rel="stylesheet">
    <!-- Google font import-->
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.1.css" rel="stylesheet">
    <!-- Google font import-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200|Open+Sans:300|Ubuntu:300" rel="stylesheet">
    <!-- search box styling-->
    <link href="css/fix-1.0.css" rel="stylesheet">
    <!-- add to cart impoted js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    <img src="images/asprin_homepage.jpeg" style="width: 150px;height: 100PX;" alt="Logo">
      <div class="container">
      
        <a class="navbar-brand" href="index.php">SedCo </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="education.php">Education</a>
                <a class="dropdown-item" href="Business_Investing.php">Business & Investment</a>
                <a class="dropdown-item" href="History.php">History</a>
                <a class="dropdown-item" href="romance.php">Romance</a>
                <a class="dropdown-item" href="Sci-Fi_Fantasy.php">Sci-Fi & Fantasy</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Best sellers</a>
              </div>
            </li>
          </ul>
          <!-- search bar-->
          <form class="form-inline my-2 my-lg-0 search-box">
              <input class="search-txt" type="text" name="" placeholder="Type to search">
               <a class="search-btn" href="#">
               <i class="fas fa-search"></i>
               </a>
          </form>
              <a href="checkout.php"><i class="fas fa-shopping-cart fa-2x cartb"><span class="cart"><?php echo $cart_count; ?></span></i></a>
          </div>
          
      </div>
      <?php
            if(isset($_SESSION['username'])){
            echo '
            <div class="usericon1">
            <li class="navbar-brand dropdown form-inline my-2 my-lg-0 ">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle fas-p fa-2x"></i></a>
                  <div class="dropdown-menufix dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="dashboard.php"><i class="fas fa-user-alt usp"></i>Profile</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cubes usp"></i>My Orders</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-book-reader usp"></i>My Library</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-history usp"></i>History</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout_process.php"><button class="btn btn-outline-success my-2 my-sm-0 lg_btn" type="submit"><i class="fas fa-door-open"></i>Logout</button></a>
            </li>
            </div>
            ';

          }else{
          echo'<a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login/Register</button></a>';
           
        }
          ?>
      
</nav>

<main>
    <div class="message_box" style="text-align: center;">
      <?php echo $status; ?>
    </div>
    <hr>
    <h2 class="text-center">EDUCATION</h2>
    <hr>

    <?php
    
    echo'
      <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-unstyled">';
          $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='1' ");
           while ($row = mysqli_fetch_assoc($result)){
           echo '
           <form method="post" action="">
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- src=images/bookcover12.jpg this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3 img-fluid"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"].'</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                  </ul><span class="price i">₵'.$row["price"].'</span>
                  <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li></form>';};

            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='2' ");
           while ($row = mysqli_fetch_assoc($result)){
           echo '
            <form method="post" action"">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
          
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"].'</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            
            </li>
            
          </ul></form>';};
          echo '
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">';

          $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='3' ");
           while ($row = mysqli_fetch_assoc($result)){
           echo '
            <form method="post" action>
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3 img-fluid"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"].'</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
            
            </li></form>';};
            
            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='4' ");
            while ($row = mysqli_fetch_assoc($result)){
            echo'
            <form method="post" action="">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img class="mr-3" src="'.$row["image"].'" alt="image"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"].'</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
             
            </li></form>';};

            echo '
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">';
           $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='5' ");
            while ($row = mysqli_fetch_assoc($result)){
            echo'
            <form method="post" action="">
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>              </div>
                
            </li></form>';};

            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='6' ");
            while ($row = mysqli_fetch_assoc($result)){
            echo'
            <form method="post" action="">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img class="mr-3" src="'.$row["image"].'" alt="image"></a>
              <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
              <div class="media-body">
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
              
            </li></form>';};

          echo'
          </ul>
        </div>
      </div>
    </div>
    <!-- more books -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-unstyled">';

             $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='7' ");
             while ($row = mysqli_fetch_assoc($result)){
             echo'
             <form method="post" action="">
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3 img-fluid"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                  </ul><span class="price i">₵'.$row["price"].'</span>
                  <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
              
            </li></form>';};
            
            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='8' ");
             while ($row = mysqli_fetch_assoc($result)){
             echo'
             <form method="post" action="">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
              
            </li></form>';};
           echo'
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">';

            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='9' ");
             while ($row = mysqli_fetch_assoc($result)){
             echo'
            <form method="post" action"">
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3 img-fluid"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
              
            </li></form>';};
            
            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='10' ");
             while ($row = mysqli_fetch_assoc($result)){
            echo'
            <form method="post" action"">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
            
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img class="mr-3" src="'.$row["image"].'" alt="image"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                  <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
              
            </li></form>';};
            $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='11' ");
             while ($row = mysqli_fetch_assoc($result)){
           echo'
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <form method="post" action="">
            <li class="media md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img src="'.$row["image"].'" alt="image" class="mr-3"></a>
              <div class="media-body">
                <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                  <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li></form>';};
             $result = mysqli_query($conn,"SELECT * FROM `edubooks` WHERE id='12' ");
             while ($row = mysqli_fetch_assoc($result)){
            echo'
            <form method="post" action="">
            <li class="media my-4 md-st">
            <input type="hidden" name="code" value="'.$row["code"].'" />
              <!-- "src="images/bookcover12.jpg" this is where you will link your image file -->
              <a href="#"><img class="mr-3" src="'.$row["image"].'" alt="image"></a>
              <!-- h6 this is where you will type the title of the book, p this is where you will type the name of the author, you can also change the price of the book "span"-->
              <div class="media-body">
                <h6 class="mt-0 mb-1">'.$row["title_of_book"]. '</h6>
                <p>'.$row["nameo_of_arthur"].'</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵'.$row["price"].'</span>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>';};
            echo'
            </form>
          </ul>
        </div>';
  mysqli_close($conn)

  ?>



    <!-- more books -->
</main>

<?php
 require 'footer.php';
?>