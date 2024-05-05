<?php
$showalert = false;
$showerr = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'connectdb.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $existsql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $existsql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    $showerr = "Username already Exists";
  }

 else{
  if((isset($username) && isset($password)) && (($password != null && $username != null)) ){

    $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
      $showalert =true;
    }
    else{
      $showerr = "Username already Exists";
    }
}
  else{
    $showerr = "Invalid credentials";
  }
 }   

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blissbond Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg nav-color">
        <div class="container-fluid">
          <a class="navbar-brand brand" href="#">BlissBond</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Learn</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Safty
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Safty Tips</a></li>
                  <li><a class="dropdown-item" href="#">Safty & policy</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Community Guidelines</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Dashboard</a>
              </li>
              <button type="button" class="btn btn-primary login" onclick="location.href='login.php'">Login</button>
            </ul>
           
          </div>
        </div>
      </nav>

      <!-- Alert -->
      <?php
      if($showalert){  
       echo'<div class="alert alert-success alert-dismissible fade show alrt" role="alert">
      <strong>Congratulation!</strong>  You signup successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
      }
       ?>

       <?php
      if($showerr){  
       echo'<div class="alert alert-danger alert-dismissible fade show alrt" role="alert">
       <strong>ERROR</strong> '.$showerr.'
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
       }
       ?>

    <!-- signup -->
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
             
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form class="" action="signup.php" method = "post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" placeholder="ex:pyschic_akkii" fdprocessedid="877tpc" name = "username" id = "username">
                  <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" placeholder="Password" fdprocessedid="kxfx" name="password" id="password">
                  <label for="password">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="41feb4">Sign up</button>
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                <hr class="my-4">
                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit" fdprocessedid="glrkge">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                  Sign up with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit" fdprocessedid="nqnf2g">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                  Sign up with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit" fdprocessedid="uz83jh">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
                  Sign up with GitHub
                </button>
              </form>
            </div>
            <a href="login.php" class="text-center link">If you already registered</a>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>