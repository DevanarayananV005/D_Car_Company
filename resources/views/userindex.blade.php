@auth
<!DOCTYPE html>
<html lang="en">

  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>D CAR COMPANY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg" style="background: #FFFFFF;">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2 style="color: black;">D CAR <em>COMPANY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" style="color: black;">
                    <a class="nav-link" href="index.html" style="color: black;">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" style="color: black;" href="cars.html">Cars</a></li>

                <li class="nav-item"><div class="dropdown">
  <img class=" dropdown-toggle" src="pngegg.png" data-bs-toggle="dropdown" style="height: 51px;margin-right: -77px;" aria-expanded="false">
  <ul class="dropdown-menu" style="background:black;">
    <li><a class="dropdown-item"  style="color:white;" href="/update">Update</a></li>
    <li><a class="dropdown-item" style="color:white;"><form action="/logout" method="POST">
        @csrf <button class="btn btn-danger">LogOut</button></form></a></li>
  </ul>
</div></li>

              </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Find your car today!</h4>
            <h2>D CAR COMPANY- TRUSTED ALWAYS</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Fugiat Aspernatur</h4>
            <h2>Laboriosam reprehenderit ducimus</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Saepe Omnis</h4>
            <h2>Quaerat suscipit unde minus dicta</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Cars</h2>
            </div>
          </div>
          @foreach($car as $cars)
          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <a href="car-details.html"><img src="{{ asset('storage/' . $cars->file) }}" alt=""></a>
              <div class="down-content">
                <a href="car-details.html"><h4>{{$cars->brand }} </h4> <h4>{{$cars->name }}</h4></a>

                <h6></small>₹{{$cars->price }}</h6>

                <p>&nbsp; {{$cars->type }} &nbsp;/&nbsp;{{$cars->model }} &nbsp;/&nbsp; Used vehicle</p>

                <small>
                  <strong title="Author"><i class="fa fa-dashboard"></i>{{$cars->mileage }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>D CAR COMPANY, <a href="#">offers</a>The best and great car ever has an over 1 billion satisfied customers</p>
              <ul class="featured-list">
                <li><a href="#">Greate Service</a></li>
                <li><a href="#">24x7 customer Service</a></li>
                <li><a href="#">1 Billion Customers</a></li>
                <li><a href="#">CMid Range to Premium</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2023 D CAR COMPANY</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
@else
<script>location.href="/register"
</script>
@endauth