<?php
 require 'header.php';
?>

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