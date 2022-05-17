<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <style>
    .carousel-item img {
      height: 450px;
    }

    /* Cards CSS */
    span {
      font-size: 15px;
    }

    a {
      text-decoration: none;
      /* color: #0062cc; */
      /* border-bottom: 2px solid #0062cc; */
    }

    .box {
      padding: 60px 0px;
    }

    .box-part {
      background: #FFF;
      border-radius: 0;
      padding: 60px 10px;
      margin: 30px 0px;
      /* border:1px solid black; */
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .text {
      margin: 20px 0px;
    }

    .box-part.fa {
      color: #4183D7;
    }
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php include 'Nav.php';?>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/logo.jpg" alt="Los Angeles" class="d-block" style="width: 100%" />
      </div>
      <div class="carousel-item">
        <img src="images/logo.jpg" alt="Chicago" class="d-block" style="width: 100%" />
      </div>
      <div class="carousel-item">
        <img src="images/logo.jpg" alt="New York" class="d-block" style="width: 100%" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


  <div class="box">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-instagram fa-3x" aria-hidden="true"></i> -->
            <img src="images/dsa.png" alt="Datastructures and Algorithms" width="50px" height="50px">
          <div class="title">
            <h5>Datastructures & Algorithms</h5>
          </div>
          <div class="text">
            <span>To Learn Datastructures And Algorithms Click On The Below Link</span>
          </div>
          <a href="DSA.php">Learn DSA?</a>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-twitter fa-3x" aria-hidden="true"></i> -->
            <img src="images/os.png" alt="Operating System" width="50px" height="50px">
            <div class="title">
              <h5>Operating System</h5>
            </div>

            <div class="text">
              <span>To Learn Operating System Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-facebook fa-3x" aria-hidden="true"></i> -->
            <img src="images/cd.jpg" alt="Compiler Design" width="50px" height="50px">
            <div class="title">
              <h5>Compiler Design</h5>
            </div>

            <div class="text">
              <span>To Learn Compiler Design Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i> -->
            <img src="images/oops.webp" alt="Object Oriented Programming" width="50px" height="50px">

            <div class="title">
              <h5>Object Oriented Programming</h5>
            </div>

            <div class="text">
              <span>To Learn Object Oriented Programming Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i> -->
            <img src="images/cn.png" alt="Computer Networks" width="50px" height="50px">

            <div class="title">
              <h5>Computer Networks</h5>
            </div>

            <div class="text">
              <span>To Learn Computer Networks Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i> -->
            <img src="images/dbms.png" alt="Database Management System" width="50px" height="50px">

            <div class="title">
              <h5>Database Management System</h5>
            </div>

            <div class="text">
              <span>Database Management System</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i> -->
            <img src="images/sd.webp" alt="System Design" width="50px" height="50px">

            <div class="title">
              <h5>System Design</h5>
            </div>

            <div class="text">
              <span>To Learn System Design Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="box-part text-center">

            <!-- <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i> -->
            <img src="images/aptitude.png" alt="Aptitude" width="50px" height="50px">

            <div class="title">
              <h5>Aptitude</h5>
            </div>

            <div class="text">
              <span>To Learn Aptitude Click On The Below Link</span>
            </div>

            <a href="#">Learn More</a>

          </div>
        </div>



      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php include 'footer.php' ?>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>