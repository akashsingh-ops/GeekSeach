<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <style>
      .list-unstyled a {
        font-size: 12px;
        letter-spacing: 0.5px;
      }
      .carousel-item img {
        height: 450px;
      }
      .navbar{
        padding: 5px!important;
        margin-bottom: 7px!important;
      }
      p.navlink{
        margin:0px!important;
      }
      button{
        /* background: linear-gradient(90deg, #fcff9e 0%, #c67700 100%); */
        /* background: linear-gradient(90deg, #d53369 0%, #daae51 100%); */
        /* background-image: linear-gradient(to right, #003973 0%, #E5E5BE  51%, #003973  100%) */
          /* background-color: #414145!important; */
          /* color:white!important; */
        /* background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%); */
      }
      /* button:hover{
        background-color: black!important;
        transition: 2s;
      } */
    </style>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <ul class="list-unstyled mb-5">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li class="active">
              <a
                href="#homeSubmenu"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
                >Free Learnings For Placements</a
              >
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="DSA.php">Datastructures and Algorithms Level 1/Level 2</a>
                </li>
                <li>
                  <a href="os.php">Operating Systems</a>
                </li>
                <li>
                  <a href="#">Compiler Designs</a>
                </li>
                <li>
                  <a href="oops.php">Object Oriented Programming</a>
                </li>
                <li>
                  <a href="cn.php">Computer Networks</a>
                </li>
                <li>
                  <a href="#">Database Management System</a>
                </li>
                <li>
                  <a href="#">System Design</a>
                </li>
                <li>
                  <a href="#">Aptitude</a>
                </li>
                <li>
                  <a href="#">Development by Choice</a>
                </li>
              </ul>
            </li>
            <li>
              <a
                href="#pageSubmenu"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
                >Oppurtunities</a
              >
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="#">Page 1</a>
                </li>
                <li>
                  <a href="#">Page 2</a>
                </li>
                <li>
                  <a href="#">Page 3</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Online Contests</a>
            </li>
            <li>
              <a href="testSkill.php">Test Your Skills</a>
            </li>
            <li>
                <a href="dsa_sheet.php">DSA Sheet</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="login.php">Login</a>
            </li>
            <li>
              <a href="register.php">SignIn</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="p-md-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only"></span>
            </button>
            <?php if(isset($_SESSION['email']))
            {
            ?>
              <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item">
                   <p style="margin:8px 5px 8px 5px"><?php echo $_SESSION['email'];?></p>
                  </li>
                  <li class="nav-item active">
                    <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
                  </li>
              </ul>
            <?php
            } 
            ?>
            <!-- <button
              class="btn btn-dark d-inline-block d-lg-none ml-auto"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">SignIn</a>
                </li>
              </ul>
            </div> -->
          </div>
        </nav>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      window.onload = function()
      {
        var hidesidebar = document.getElementById('sidebar');
        document.onclick = function(e)
        {
          if(e.target.id !== 'sidebar')
          {
            hidesidebar.classList.remove('active');
          }
        };
        document.onclick = function(e)
        {
          if(e.target.id === 'sidebar')
          {
            hidesidebar.classList.add('active');
          }
        };
      };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
