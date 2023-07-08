<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <a class="navbar-brand" href="#">Laptop Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Productpage.html">Laptops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Categorypage.html">Category Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contantus.html">Contant Us</a>
          </li>
          <li>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"      aria-haspopup="true" aria-expanded="false">
                  Select a Role for login
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </div>
          </li> 
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-none d-lg-block">
                  <div class="slide-box">
                    <img src="img/dell.jpg" alt="First slide">
                    <img src="img/macbook.jpg" alt="First slide">
                    <img src="img/HP Spectre x360.jpg" alt="First slide">
                    <img src="img/dell.jpg" alt="First slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="img/macbook.jpg" alt="First slide">
                    <img src="img/HP Spectre x360.jpg" alt="First slide">
                    <img src="img/dell.jpg" alt="First slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="img/macbook.jpg" alt="First slide">
                    <img src="img/dell.jpg" alt="First slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="HP Spectre x360.jpg" alt="First slide">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-none d-lg-block">
                  <div class="slide-box">
                    <img src="img/dell.jpg" alt="Second slide">
                    <img src="img/HP Spectre x360.jpg" alt="Second slide">
                    <img src="img/dell.jpg" alt="Second slide">
                    <img src="img/macbook.jpg" alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-md-block d-lg-none">
                  <div class="slide-box">
                    <img src="img/macbook.jpg" alt="Second slide">
                    <img src="img/dell.jpg" alt="Second slide">
                    <img src="img/HP Spectre x360.jpg" alt="Second slide">
                  </div>
                </div>
                <div class="d-none d-sm-block d-md-none">
                  <div class="slide-box">
                    <img src="img/dell.jpg" alt="Second slide">
                    <img src="img/HP Spectre x360.jpg" alt="Second slide">
                  </div>
                </div>
                <div class="d-block d-sm-none">
                  <img class="d-block w-100" src="img/macbook.jpg" alt="Second slide">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
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
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <h1>Welcome to Laptop Store</h1>
      <p>We sell the latest laptops at affordable prices</p>
    </div>

    <!-- Products -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/dell.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dell XPS 13</h5>
              <p class="card-text">85,877</p>
              <a href="#" class="btn btn-primary">Buy now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/macbook.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Macbook Air</h5>
              <p class="card-text">86,990</p>
              <a href="#" class="btn btn-primary">Buy now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/HP Spectre x360.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">HP Spectre x360</h5>
              <p class="card-text">49,999</p>
              <a href="#" class="btn btn-primary">Buy now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Laptop Store © 2023</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5><i class="fa fa-road"></i> ACME CO INC.</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="">Product</a></li>
                                <li><a href="">Benefits</a></li>
                                <li><a href="">Partners</a></li>
                                <li><a href="">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="">Documentation</a></li>
                                <li><a href="">Support</a></li>
                                <li><a href="">Legal Terms</a></li>
                                <li><a href="">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>
                    <br>
                </div>
                <div class="col-md-2">
                    <h5 class="text-md-right">Contact Us</h5>
                    <hr>
                </div>
                <div class="col-md-5">
                    <form>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>

    