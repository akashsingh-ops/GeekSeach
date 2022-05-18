<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Responsive Footer | CodingLab</title>--->
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    />
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap");

    .card {
      padding: 2% 7%;
      color: #646771;
      background-color: white;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    ul > li {
      padding: 4px;
    }

    ul > li:hover {
      color: #957bda;
      cursor: pointer;
    }

    hr {
      border-width: 3px;
    }

    .social > i {
      padding-left: 1%;

      font-size: 21px;
      margin-bottom: 0px;
    }
    .social > .next {
      margin-left: 20px;
      font-size: 21px;
    }

    .social > i:hover {
      color: #957bda;
      cursor: pointer;
    }

    .policy > div {
      padding: 4px;
    }

    .heading {
      font-family: "Titillium Web", sans-serif;
      color: white;
    }

    .divider {
      border-top: 2px solid rgba(189, 196, 203, 0.5);
    }
    #footer {
      /* position:fixed; */
      bottom: 0;
    }
  </style>
  <body>
    <footer class="w-100" id="footer">
      <div
        class="mt-5 mb-0"
        style="width: 100%; padding: 0px; bottom-margin: 0px"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
      >
        <div class="card">
          <div class="row mb-4">
            <div class="col-md-4 col-sm-11 col-xs-11">
              <div class="footer-text pull-left">
                <div class="d-flex">
                  <h1
                    class="font-weight-bold mr-1 px-3"
                    style="
                      padding: 0px;
                      color: #16151a;
                      background-color: #957bda;
                    "
                  >
                    MBA
                  </h1>
                  <h1 style="color: #957bda">430</h1>
                </div>
                <p class="card-text" style="font-size: 15.5px">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Commodi non pariatur numquam animi nam at impedit odit nisi.
                </p>

                <div class="social mt-2 mb-3">
                  <i class="fa fa-facebook-official fa-lg"></i>
                  <i class="fa next fa-instagram fa-lg"></i>
                  <i class="fa next fa-twitter fa-lg"></i>
                  <i class="fa next fa-linkedin-square fa-lg"></i>
                  <i class="fa next fa-facebook"></i>
                </div>
              </div>
            </div>

            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>

            <div class="col-md-2 col-sm-4 col-xs-4">
              <h5 class="heading">Services</h5>
              <ul>
                <li>IT Consulting -</li>
                <li>Development</li>
                <li>Cloud</li>
                <li>DevOps & Support</li>
              </ul>
            </div>

            <div
              class="col-md-2 col-sm-4 col-xs-4"
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
            >
              <h5 class="heading">Industries</h5>
              <ul class="card-text">
                <li>Finance</li>
                <li>Public Sector</li>
                <li>Smart Office</li>
                <li>Retail</li>
              </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4">
              <h5 class="heading">Company</h5>
              <ul class="card-text">
                <li>About Us</li>
                <li>Blog</li>
                <li>Contact</li>
                <li>Join Us</li>
              </ul>
            </div>
          </div>

          <div class="divider mb-4"></div>

          <div class="row" style="font-size: 10px">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="pull-left" style="padding: 0px">
                <p style="font-size: 13px; padding: 0px">
                  <i class="fa fa-copyright"></i> 2020 thezpdesign
                </p>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
              <div
                class="pull-right mr-4 d-flex policy"
                style="font-size: 13px; padding: 0px"
              >
                <div>Terms of Use</div>
                <div>Privacy Policy</div>
                <div>Cookie Policy</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
