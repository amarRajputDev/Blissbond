<?php
session_start();
include("connectdb.php");

 if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true) {
     header("location: signup.php");
     exit();
 }
 

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="welcom.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="profile.css">
  </head>
  <body>
    <!-- Menubar -->
    <div class="d-flex flex-column flex-shrink-0 p-3  fixed meenu" style="width: 300px; height: 100vh;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-2 brand">BlissBond</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="welcome.php" class="nav-link menu  mtext" aria-current="page">

            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            <i class="fa-solid fa-house-chimney fa-xl"></i>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link  menu mtext"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#" class="nav-link  menu mtext" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            <i class="fa-solid fa-comments fa-xl"></i>
            Messages
            <span class="position-absolute badge rounded-pill bg-danger">
              99+
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
  
        </li>
        <li>
          <a href="#" class="nav-link  menu mtext" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            <i class="fa-solid fa-square-plus fa-xl"></i>
            Create
          </a>
        </li>
        <li>
          <a href="profile.html" class="nav-link menu act">
            
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            <i class="fa-solid fa-user fa-xl"></i>
            Profile
          </a>
        </li>
      </ul>
      <!-- toggle-button -->
    <div class="toggle-button">
      <p class="mtext">dark mode</p>
    <div class="checkbox-wrapper-5">
      <div class="check">
        <input id="check-5" type="checkbox">
        <label for="check-5"></label>
      </div>
      
    </div>
    
   </div>

    </div>

      <!-- body -->
      <div class="hero">
        <div class="details-container">
        <div class="profilecard"> 
          <input type="file" accept="image/jpeg, image/png , image/jpg" name="" id="input-file">
          <label for="input-file" id="input-img">Update Image</label>
        <h1 class="mtext">@<?php echo $_SESSION['username']; ?></h1>
        <img src="photos/default.png" alt="" id="profile-pic"/>

        </div>
        <div class="details">
          <div class="opt">
            <h3 class="mtext"><?php echo $_SESSION['username']; ?></h3>
            <button>Edit Profile</button>
            <button>View Archive</button>

          </div>
          <div class="de-con">
          <div class="detail mtext"><b>0</b> posts</div>
          <div class="detail mtext"><b>0</b> connections</div>
          <div class="detail mtext"><b>0</b> Requests</div>
          </div>
          <div class="space">
            <p class="mtext">_youngblooded and firehearted 🔥☠️</p>

          </div>
        </div>

      </div>
      <div class="highlights dar">
        <i class="fa-solid fa-plus fa-spin fa-2xl mtext"></i>
      </div>
      <p class="high-text mtext">Add New</p>
        <hr class="t">
        <div class="post-con">
          <div class="post">
            <i class="fa-regular fa-bookmark fa-2xl mtext"></i>
            <p class="mtext"><b>No Post</b></p>
          </div>
        </div>
      </div>
  
     
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/da869572f3.js" crossorigin="anonymous"></script>
    <script src="profile.js"></script>

    <script>
      let ProfilePic = document.getElementById("profile-pic");
      let inputfile = document.getElementById("input-file");

      inputfile.onchange = function(){
        ProfilePic.src =URL.createObjectURL(inputfile.files[0]);
      }
    </script>
    
  </body>
</html>
