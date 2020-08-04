<?php
 require 'header.php';
?>

	<main>
		<div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/bookbanner1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="slid-text">Our best sellers for this month</h5>
                  <p class="slid-text">American Hunter & Strong and Kind</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/bookbanner2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="slid-text">Biggest books catalogue</h5>
                  <p class="slid-text">reading is knowledge</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/bookbanner4.png" alt="Third slide" width="1920" class="d-block w-100 blur">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="slid-text">Ebooks also avialable</h5>
                  <p class="slid-text">Access all your purchased ebooks accross all your devices</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
              <div class="col-2"><i class="fas fa-truck-moving fa-2x rounded-circle fasi"></i></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Free Shipping</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><i class="fas fa-undo fa-2x rounded-circle fasi"></i></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Free Returns</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><i class="fas fa-funnel-dollar fa-2x rounded-circle fasi"></i></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Low Prices</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">Shop by Category</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/education1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Education</h5>
              <p class="card-text"><a href="#">Unlimited Memory: How to Use...</a></p>
              <a href="education.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/business1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Business & Investing</h5>
                <p class="card-text"><a href="#">The Power of Habit: Why We Do...</a></p>
              <a href="Business_Investing.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/history1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">History</h5>
                <p class="card-text"><a href="#">Tyndale: The Man Who Gave God...</a></p>
              <a href="History.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/romancekiss.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" >Romance</h5>
                <p class="card-text"><a href="#">Faking Forever</a></p>
              <a href="romance.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/fantasy1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sci-Fi & Fantasy</h5>
                <p class="card-text"><a href="#">Branded By The Black Wolves</a></p>
              <a href="Sci-Fi_fantasy.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/child1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Children's Books</h5>
              <p class="card-text"><a href="#">Lion king</a></p>
              <a href="children's_books.php" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">FEATURED BOOKS</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media md-st">
              <img src="images/bookcover12.jpg" alt="image" class="mr-3 img-fluid">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Bad Blood Secrets...</h6>
                <p>John Carreyrou</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                  </ul><span class="price i">₵49.99</span><br>
                  <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
            <li class="media my-4 md-st">
              <img src="images/bookcover14.jpg" alt="image" class="mr-3">
              <div class="media-body">
                <h6 class="mt-0 mb-1">The Threat</h6>
                <p>Andrew G.McCabe</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵39.99</span><br>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
            
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media md-st">
              <img src="images/bookcover8.jpg" alt="image" class="mr-3 img-fluid">
              <div class="media-body">
                <h6 class="mt-0 mb-1">The Ambitious Woman</h6>
                <p>Esther Spina</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star-half-alt fas-lg star"></i></li>
                </ul><span class="price">₵39.99</span><br>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
            <li class="media my-4 md-st">
              <img class="mr-3" src="images/bookcover5.jpg" alt="image">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Silent Night</h6>
                <p>Danielle Steel</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵49.99</span><br>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media md-st">
              <img src="images/bookcover7.jpg" alt="image" class="mr-3">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Freelance to Freedom</h6>
                <p>Vincent Pugliese</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵49.99</span><br>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
            <li class="media my-4 md-st">
              <img class="mr-3" src="images/bookcover9.jpg" alt="image">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Gameplan</h6>
                <p>Esther Spina</p><br>Rating...
                <ul class="staru">
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                       <li><i class="fas fa-star fas-lg star"></i></li>
                </ul><span class="price">₵49.99</span><br>
                <a class="add-to-cart"><button class="btn-cart"><i class="fas fa-shopping-cart">Add to cart</i></button></a>
              </div>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
	</main>
	
<?php
 require 'footer.php'
?>

