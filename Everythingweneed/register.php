<?php
session_start();
ob_start();
?>
<?php include 'Nav.php' ?>
<?php include 'linksicons.php' ?>
<section>
  <div class="container h-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="registerprocess.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="fname"/>
                      <label class="form-label" for="form3Example1c">FirstName</label>
                    </div>
                  </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example2c" class="form-control" name="lname"/>
                      <label class="form-label" for="form3Example2c">LastName</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="email"/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-book fa-lg me-3 fa-fw"></i>
                    
                    <div class="form-outline flex-fill mb-0">
                      <!-- <input type="email" id="form3Example4c" class="form-control" name="email"/> -->
                      <input list="Courses" name="course" class="form-control" id="form3Example4c">
                      <label class="form-label" for="form3Example4c">Choose Course</label>
                        <datalist id="Courses">
                          <option value="B.tech">
                          <option value="BCA">
                          <option value="M.tech">
                          <option value="MCA">
                          <option value="BSC Computer Science">
                          <option value="MSC Computer Science">
                          <option value="Diploma">
                        </datalist>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-school fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="Colleges" id="form3Example3c" class="form-control" name="college"/>
                      <label class="form-label" for="form3Example3c">College Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-calendar-times fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <!-- <input type="email" id="form3Example4c" class="form-control" name="email"/> -->
                      <input list="Year" name="year" class="form-control" id="form3Example4c" autocomplete="off">
                      <label class="form-label" for="form3Example4c">Choose Year</label>
                        <datalist id="Year">
                          <option value="1st Year">
                          <option value="2nd Year">
                          <option value="3rd Year">
                          <option value="4th Year">
                          <option value="5th Year">
                        </datalist>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example5c" class="form-control" name="pass"/>
                      <label class="form-label" for="form3Example5c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example5cd" class="form-control" />
                      <label class="form-label" for="form3Example5cd">Repeat your password</label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input name="submit" type="submit" value="Register" class="btn btn-primary btn-lg">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/vector1.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <div class="modal fade" tabindex="-1" role="dialog" id="msgmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_SESSION['msgheading'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $_SESSION['msg'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['msgheading'])) {
    ?>
        <script>
            $('#msgmodal').modal();
        </script>
    <?php
        unset($_SESSION['msgheading']);
        unset($_SESSION['msg']);
    }
    ?>
<?php include 'footer.php' ?>
</div>
</div>