<?php
$showalert = false;
$showerr = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'connectdb.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM `users` WHERE username='$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('location:welcome.php');
  } else {
    $showerr = "Invalid Credentials";
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg nav-color">
    <div class="container-fluid">
      <a class="navbar-brand brand" href="#">BlissBond</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Community Guidelines</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Dashboard</a>
          </li>
          <button type="button" class="btn log login" onclick="location.href='signup.php'">Sign up</button>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Alerts -->
  <?php
  if ($showerr) {
    echo '<div class="alert alert-danger alert-dismissible fade show alrt" role="alert">
       <strong>ERROR</strong> ' . $showerr . '
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
  }
  ?>

  <!-- login code -->
  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5 body" tabindex="-1" role="dialog"
    id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
        </div>

        <div class="modal-body p-5 pt-0">
          <form action="login.php" method="post">
            <div class="logocon">
              <img class="mb-4 logo" src="photos/logo.png" alt="" width="150" height="150">
            </div>

            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

            <div class="form-floating">
              <input type="text" class="form-control mb-2" id="floatingInput" placeholder="name@example.com"
                fdprocessedid="kpch2n" name="username" id="username">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control mb-2" id="floatingPassword" placeholder="Password"
                fdprocessedid="34nim" name="password" id="password">
              <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg log" type="submit" fdprocessedid="voqiq">
              <span>Log in</span>
            </button>

            <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>