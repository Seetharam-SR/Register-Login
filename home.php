<?php 
  include('config.php'); 
  session_start();
    $sql = "select * from user_details where id= '".$_SESSION['userid']."'";
    $result = mysqli_query($conn,$sql);
    $user   = $result->fetch_assoc();
    ?>

    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <title>User</title>
    <style>
      .custom-design {
          background-color: #ff4955;
          color: #fff;
          padding: 20px;
          border-radius: 10px;
          min-height: 300px;
      }
      .navbar-light .navbar-brand {
    color: #fff;
}
    </style>
    <script type="text/javascript">
      $(document).ready(function() {

        $('#logout').click(function(event){
          event.preventDefault();
          $.ajax({
          type: "POST",
          url: "save.php",
          data: {action:'logout'},
          dataType: "json",
          encode: true,
          }).done(function (data) {
            window.location.href = 'http://localhost/demo/index.php';
          });
        });
      });
    </script>
  </head>
  <body>
  <header class="bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="ml-auto">
          <a href="#" id="logout" class="text-white">Logout</a>
        </div>
      </nav>
    </div>
  </header>

    <div class="container">
    <div class="row justify-content-center mt-5">
        <!-- <div class="col-6 custom-design">
            
            <h6>Name  : </h6>
            <h6> : <?= $user['email']; ?></h6>
            <h6>DOB   : <?= $user['dob']; ?></h6>
            <h6>mobile: <?= $user['phone']; ?></h6>
        </div> -->
        <div class="col-6 custom-design">
          <h3 class="mb-4">User Information</h3>
          <div class="row mb-2">
            <div class="col-md-2">Name</div>
            <div class="col-md-10"><?= $user['fullname']; ?></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2">Email</div>
            <div class="col-md-10"><?= $user['email']; ?></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2">DOB</div>
            <div class="col-md-10"><?= $user['dob']; ?></div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2">Mobile</div>
            <div class="col-md-10"><?= $user['phone']; ?></div>
          </div>
        </div>
    </div>
    </div>
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>