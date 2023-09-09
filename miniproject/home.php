
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Home Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="css2/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css2/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" style="padding-left: 100px;">MCQ-QUIZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php" style="padding-left: 1000px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./admin/adminlogin.php">Login Admin</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img1.jpg"></svg>

      </div>
     
      
    </div>
    
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <h4 style="text-align: center; margin-bottom: 60px;">Developed By:</h4>

      <div class="col-lg-4">

       <svg width="500" height="250">
    <defs>
        <clipPath id="circleView">
            <circle cx="250" cy="125" r="125" fill="#FFFFFF" />
        </clipPath>
    </defs>
    <image 
      width="500" 
      height="250" 
      xlink:href="milan7.jpeg" 
      clip-path="url(#circleView)"
    />
 </svg>

        <h4 style="text-align: center; padding-left: 80px;">Milan Bhattarai</h4>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <svg width="500" height="250">
    <defs>
        <clipPath id="circleView">
            <circle cx="250" cy="125" r="125" fill="#FFFFFF" />
        </clipPath>
    </defs>
    <image 
      width="500" 
      height="250" 
      xlink:href="manish.jpg" 
      clip-path="url(#circleView)"
    />
 </svg>
        <h4 style="text-align: center; padding-left: 80px;">Manish Rai</h4>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg width="500" height="250">
    <defs>
        <clipPath id="circleView">
            <circle cx="250" cy="125" r="125" fill="#FFFFFF" />
        </clipPath>
    </defs>
    <image 
      width="500" 
      height="250" 
      xlink:href="ido6.jpg" 
      clip-path="url(#circleView)"
    />
 </svg>

        <h4 style="text-align: center; padding-left: 80px;">Prakash Magar</h4>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


   