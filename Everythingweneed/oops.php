<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Datastructures</title>
    <style>
      p button{
        width: 100%;
      }
    </style>
  </head>
<body>
<?php include 'Nav.php';?>
<div id="accordion">
  <center><h2>Object oriented Programming</h2></center>

  <div class="card mb-2">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOneone" aria-expanded="true" aria-controls="collapseOne">
          oops
        </button>
      </h5>
    </div>
    <div id="collapseOneone" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <!-- Basics Videos 90 -->
          <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            oops in one shot
          </button>
          </p>
          <div class="collapse mb-1" id="collapseExample">
          <div class="card card-body card-group">

          <div class ="col-sm-1">

          </div>

            <div class="col-sm-10">
              <div class="card text-dark bg-white mb-1">
                <div class="card-text text-center">
                  <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/list=bSrm9RXwBaI" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="text-center mb-1">
                  <h5 class="card-text" style="font-size: 18px;font-weight:bold;">Apna college</h5>
                </div>
              </div>
            </div>
            <div class ="col-sm-1">

            </div>  <br>
            <!-- level 2 start -->
                
            <!-- level 2 ends -->

                    
          
        <!-- apna college Videos -->
          
         
      </div>
    </div>
  </div>

  <!-- java section ends here -->