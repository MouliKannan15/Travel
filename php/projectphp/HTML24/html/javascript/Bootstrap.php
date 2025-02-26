<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Project</title>
  <script src="https://kit.fontawesome.com/f302a0c18e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../main.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family:initial;"><img src="../javascript/Parallel-removebg-preview.png" height="50px" width="70px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left: 230px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../javascript/About.php" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size: 20px;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="../javascript/group.php" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 40px; font-size: 20px;">Group Tours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../javascript/top.php" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 40px; font-size: 20px;">Top Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="../javascript/Booking.php" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 40px; font-size: 20px;">Booking</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 40px; font-size: 20px;">
              Packages
            </a>
            <ul class="dropdown-menu">
              <li><a class="Travel Interests" href="#">Adventure Travel</a></li>
              <li><a class="Travel Interests" href="#">Art and Culture</a></li>
              <li><a class="Travel Interests" href="#">Beaches and Islands</a></li>
              <li><a class="Travel Interests" href="#">Family Holidays</a></li>
              <li><a class="Travel Interests" href="#">Honeymoon Romance </a></li>
              <li><a class="Travel Interests" href="#">Travel on a Budget</a></li>
              <li><a class="Travel Interests" href="#">Wildlife and Nature</a></li>
              <li><a class="Travel Interests" href="#">Road Trips</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-dark"> <a href="../javascript/Clogin.html" style="text-decoration: none; color: white;">Log In</a></button>
    </div>
  </nav>
  <table>
    <tr class="poto">
      <td class="poto1"><img src="..\javascript\efil.png" alt="" style="width: 445px; height: 1000px;"></td>
      <td class="poto2"><img src="..\javascript/beach.png" alt=""style="width: 445px;height: 1000px;"></td>
      <td class="poto3"><img src="../javascript/hill view.png" alt="" style="width: 445px;height: 1000px;"></td>
    </tr>
    <h2 class="cont">Welcome to <p style="padding-left: 140px;"> Parallel World</p></h2>
  </table>
  <br>
  <h2 class="pop">Popular Packages</h2> 
      <div class="container">
        <div class="row"> 
          <div class="col-md-8">
            <div class="indian">Indian Tour Packages <center><button type="button" class="btn btn-secondary"> <a href="../javascript/Indian.php" style="text-decoration: none; color: white;">101 Tours</a></button></center></div>
            <img class="indi" src="../javascript/culture.jpg" alt="" height="300px" width=" 700px">
          </div>
          <div class="col-md-4">
            <div class="indian1">International Tour Packages<center><button type="button" class="btn btn-secondary"> <a href="../javascript/top.php" style="text-decoration: none; color:white;"> 152 Tours</a></button></center></div>
            <img class="indi" src="../javascript/inter2.jpg" alt="" height="300px" width=" 400px">
          </div>
        </div>
      </div>
      <br>
      <div class="padd">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="ind">Honeymoon Packages<center><button type="button" class="btn btn-secondary"> <a href="../javascript/honey.php" style="text-decoration: none; color: white;">60 Tours</a></button></center></div>
            <img class="indi" src="../javascript/honey moon.jpg" alt="" height="300px" width=" 400px">
          </div> <br>
          <div class="col-md-7">
            <div class="ind1">Europe Tour Packages<center><button type="button" class="btn btn-secondary"> <a href="../javascript/europe.php" style="text-decoration: none; color: white;">43 Tours</a></button></center></div>
            <img class="indi"  src="../javascript/Europe.jpg" alt=""  height="300px" width=" 700px">
          </div>
        </div>
      </div>
      </div>
  <h6 class="ur">PLAN YOUR TRIP</h6>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="../javascript/Europe-The-Leaning-Tower-of-Pisa.jpg" class="d-block" alt="..." width="1350px" height="500px" style="padding-top: 50px; ">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 40px; color:white; ">London</h5>
          <p style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 30px; color:white;">Erope Popular Tours.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../javascript/america-tour-package-from-india.jpg" class="d-block" alt="..." width="1350px" height="500px" style="padding-top: 50px;" >
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 40px; color:white; ">White House</h5>
          <p style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 30px; color:white; ">Asian Popular Tours.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../javascript/asia-holiday-packages-from-india.jpg" class="d-block " alt="..." width="1350px" height="500px" style="padding-top: 50px;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 40px; color:white; ">Taj Mahal</h5>
          <p style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 30px; color:white; ">Indian Popular Tours</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="desti">Popular South Indian Places</h1>
    <!-- <a href="">
    <button class="btn btn-outline-success" style="margin-left: 65%;"> <a href="../javascript/top.php" style="text-decoration: none; color: black;">Top Destinations</a></button></a></h1> -->
    <div class="place">
    <div class="place1"><img src="..\javascript\munnar1.png" alt="" style="border-radius: 20px;" height="300px">
      <center><button type="button" class="btn btn-light" style="font-size: 20px;"><a href="../javascript/munnar.php" style="text-decoration: none; color: black; font-family: Georgia, 'Times New Roman', Times, serif;">Munnar</a></button></center>
    </div>
    
  
    <div class="place1"><img src="..\javascript\goa1.png" alt="" style="border-radius: 20px;" height="300px">
      <center><button type="button" class="btn btn-light" style="font-size: 20px;"><a href="../javascript/goa.php" style="text-decoration: none; color: black; font-family: Georgia, 'Times New Roman', Times, serif;">Goa</a></button></div></center>
  
    <div class="place1"><img src="../javascript/tanjore1.png" alt="" style="border-radius: 20px;" height="300px">
      <center><button type="button" class="btn btn-light" style="font-size: 20px;"><a href="../javascript/south.php" style="text-decoration: none; color: black; font-family: Georgia, 'Times New Roman', Times, serif;">South Temples</a></button></div></center>
    </div>
    <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; text-align: center;">Our Happy Clients</h2>
    
    <div class="container">
      <div class="row">
        <div class="col-md-3">
            <a href="../javascript/review.php"><img  src="../javascript/andrea-gtholidays-review-768x1242.jpg" alt="" height="400px" width="300px"></a>
        </div>
        <div class="col-md-3">
            <a href="../javascript/review.php"><img src="../javascript/ceo-ranindia-gtholidays-review-768x1242.jpg" alt="" height="400px" width="300px"></a>
        </div>
        <div class="col-md-3">
            <a href="../javascript/review.php"><img src="../javascript/dd-gtholidays-feedback-768x1242.jpg" alt="" height="400px" width="300px"></a>
        </div>
        <div class="col-md-3">
          <a href="../javascript/review.php"><img src="../javascript/nayan-wikki-gtholidays-review-768x1242.jpg" alt="" height="400px" width="300px"></a>
      </div>
    </div>
</div>
<h1 style="text-align: center; margin-top: 40px;">Rate Us!</h1>
    <div class="rating">
        <span data-value="1">&#9733;</span>
        <span data-value="2">&#9733;</span>
        <span data-value="3">&#9733;</span>
        <span data-value="4">&#9733;</span>
        <span data-value="5">&#9733;</span>
    </div>
    <h2 class="plan">Plan in it for 2025</h2>
    <!-- <center><img class="travel" src="C:\Users\elcot\Desktop\html24\HTML24\Green and Blue Photo Travel Instagram Post.png" alt="" height="800px" width="1000px" style="border-radius: 20px;"></center> -->
    <img src="../javascript/Blue and Yellow Simple Travel Doubled Sided Poster.png" alt="" width="1347px" height="800px">
      <br>
      <!-- <div><marquee behavior="" direction="5s" style="font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif; color: black;"> Book Now @Parallel Universe  </marquee></div> -->
      <footer class="footer">
        <div class="footer-container">
          <div class="footer-address">
            <h3>Our Address</h3>
            <p>121, S.N.Palayam, Coimbatore, Tamil Nadu.</p>
            <p>Phone: 987654321</p>
            <p>Email: <a href="mailto:info@example.com">info@universalworld.com</a></p>
          </div>
          <div class="footer-social">
            <h3>Follow Us</h3>
            <ul>
              <li> FaceBook</a></li>
              <li>Twitter</a></li>
              <li> Instagram</a></li>
            </ul>
          </div>
          <div class="footer-social">
            <h3>Our Branches</h3>
            <ul>
              <li>Coimbatore</li>
              <li>Chennai</li>
              <li>Bangalore</li>
              <li>Hydrabate</li>
            </ul>
          </div>
        </div>
        <div class="footer-copyright">
          <p>&copy; 2025 ParallelWorld Company. All rights reserved.</p>
        </div>
      </footer>
</body>
</html>