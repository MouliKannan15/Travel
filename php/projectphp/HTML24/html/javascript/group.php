<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<script src="https://kit.fontawesome.com/f302a0c18e.js" crossorigin="anonymous"></script>
<style>

ul li a
{
    text-decoration: none;
    color: black;
}


.nav-link 
{
    border-bottom: 2px solid transparent;
}
.nav-link:hover {
border-bottom: 2px solid black;
}


.footer {
    background-color:black;
    color:white;
    padding: 50px 0;
}
.footer-container {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.footer-address {
    width: 30%;
    margin-right: 20px;
}

.footer-social {
    width: 30%;
}

.footer-copyright {
    padding: 10px;
    text-align: center;
    clear: both;
}

.footer h3 {
    margin-bottom: 20px;
}

.footer ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer li {
    margin-bottom: 10px;
}
.footer a {
    color: #fff;
    text-decoration: none;
}
.poto:hover
{
opacity: 2;
}
.poto
{
    opacity: 0.9;
    transition: (1,1);
}
</style>
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
                <a class="nav-link" href="../javascript/Booking.php" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 40px; font-size: 20px;">Top Destinations</a>
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
    <h6 style="font-size: 30px; font-family:Georgia, 'Times New Roman', Times, serif; margin: 40px; text-align: center;" >Ultimate Group Tour Adventures</h6>
    <img class="poto" src="..\Mini\pexels-belle-co-99483-1000445.jpg" alt="" height="500px" width="1250px" style="padding-left: 120px;">
    <h5 style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin: 40px; padding-left: 70px;" >Summer Groups for 2025</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center><img src="../Mini/Dubai-Group-Tour-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Dubai 4 Nights 5 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/Thailand-Group-Tour-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Thailand 9 Nights 10 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/Bali-Group-Tour-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Bali 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/South-Africa-Group-Tour-1-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">South Africa 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
        </div>
    </div>
    
    <h5 style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin: 50px; margin-left: 110px;" >Premium Group Tours</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center><img src="../Mini/Aegean-island-680x500.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Aegean 4 Nights 5 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/Egypt-Group-Tour-GT-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Egypt 9 Nights 10 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/Golden-Triangle-Group-Tour-400x400.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Taj Mahal 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../javascript/america-tour-package-from-india.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">US 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
        </div>
    </div>
    <h5 style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin: 50px; margin-left: 110px;" >Fully Reserved Exclusive Group Tours</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center><img src="../Mini/Tokyo.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Tokyo 4 Nights 5 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/pattaya-bangkok-680x500.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Pattaya 9 Nights 10 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../Mini/Munnar-family-tour-package-870x555.jpg" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Munnar 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
            <div class="col-md-3">
                <center><img src="../javascript/goa1.png" alt="" height="350px" width="270px"><div style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 10px;">Goa 5 Nights 6 Days</div><button type="button" class="btn btn-dark">Package Details</button></center>
            </div>
        </div>
    </div>
    <marquee behavior="" direction="5s" style="font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif; color: black;"> Book Now @Parallel Universe  </marquee>
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