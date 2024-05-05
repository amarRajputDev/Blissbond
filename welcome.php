<?php
session_start();
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
    <title>Deshboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="welcom.css">
  </head>
  <body>


    <!-- menu bar -->
  <div class="d-flex flex-column flex-shrink-0 p-3 fixed meenu" style="width: 300px; height: 100vh; background-color: white;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-2 brand">BlissBond</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link act menu" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          <i class="fa-solid fa-house-chimney"></i>
          Home
        </a>
      </li>
      <li>
        <a href="busy.php" class="nav-link menu mtext">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <i class="fa-solid fa-magnifying-glass"></i>
          Search
        </a>
      </li>
      <li>
        <a href="busy.php" class="nav-link menu mtext" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          <i class="fa-solid fa-comments"></i>

          Messages
          <span class="position-absolute badge rounded-pill bg-danger">
            99+
            <span class="visually-hidden">unread messages</span>
          </span>
        </a>

      </li>
      <li>
        <a href="busy.php" class="nav-link menu mtext" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <i class="fa-solid fa-plus"></i>

          Create
        </a>
      </li>
      <li>
        <a href="profile.php" class="nav-link mtext menu">
          <svg class="bi pe-none me-2 mtext" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <i class="fa-solid fa-user"></i>

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
  <!-- stories -->
  <div class="stories">
    <img src="photos/girl2.jpg" class="story" alt="">
    <img src="photos/boy.jpg" class="story" alt="">
    <img src="photos/girl1.jpg" class="story" alt="">
    <img src="photos/boy1.jpg" class="story" alt="">
    <img src="photos/girl4.jpg" class="story" alt="">
    <img src="photos/girl3.jpg" class="story" alt="">
    <img src="photos/boy3.jpg" class="story" alt="">
    <img src="photos/boy2.jpg" class="story" alt="">
    <img src="photos/girl5.jpg" class="story" alt="">
    
  </div>

    <!-- MainBody -->
    <div class="container">
    <div class="card" style="width: 18rem;">
      <img src="photos/girl1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ella</h5>
        <p class="card-text">Age : 23 <br>Live in : Canada <br>Gender : Girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="photos/boy.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Amar Rajput</h5>
        <p class="card-text">Age : 20 <br>Live in : India <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="photos/girl3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Aera</h5>
        <p class="card-text">Age : 22 <br>Live in : Korea <br>Gender : girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/boy1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rahul</h5>
        <p class="card-text">Age : 23 <br>Live in : India <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/girl5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sania</h5>
        <p class="card-text">Age : 26 <br>Live in : India <br>Gender : Girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/girl6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Janvi</h5>
        <p class="card-text">Age : 20 <br>Live in : India <br>Gender : girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/girl2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Jasmin</h5>
        <p class="card-text">Age : 22 <br>Live in : Korea <br>Gender : girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/girl4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nancy</h5>
        <p class="card-text">Age : 23 <br>Live in : Korea <br>Gender : girl</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/boy2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mateo</h5>
        <p class="card-text">Age : 20 <br>Live in : Canada <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>

      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/boy3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Daniel</h5>
        <p class="card-text">Age : 20 <br>Live in : Canada <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>
      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/boy4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Michael</h5>
        <p class="card-text">Age : 24 <br>Live in : America <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>
        
        

      </div>
    </div>
    <div class="card gap" style="width: 18rem;">
      <img src="photos/boy5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Alexander</h5>
        <p class="card-text">Age : 22 <br>Live in : America <br>Gender : Boy</p>
        <button>
          <span>CONNECT</span>
        </button>

      </div>
    </div>
  </div>

  <nav aria-label="..." class="page">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link">Previous</a>
      </li>
      <li class="page-item"><a class="page-link active"aria-current="page" href="#">1</a></li>
      <li class="page-item" >
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/da869572f3.js" crossorigin="anonymous"></script>
    <script src="welcome.js"></script>
  </body>
</html>