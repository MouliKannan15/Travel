<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <script src="https://kit.fontawesome.com/f302a0c18e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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


        body {
          font-family: Georgia, 'Times New Roman', Times, serif;
          background-color: #f4f4f4;
          background-image: url(../photo-1476514525535-07fb3b4ae5f1.jpeg);
          background-repeat: no-repeat;
          background-size:cover;
          
          /* display: flex; */
          /* justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0; */
        }
    
        #user-form {
          background-color: white;
          padding: 20px;
          border-radius: px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          width: 400px;
          
        }
    
        h2 {
          text-align: center;
          color: #333;
        }
    
        label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
        }
    
        input, select {
          width: 100%;
          padding: 8px;
          margin: 8px 0;
          border-radius: 4px;
          border: 1px solid #ddd;
          box-sizing: border-box;
        }
    
        input[type="submit"] {
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
          padding: 10px;
        }
    
        input[type="submit"]:hover {
          background-color: #45a049;
        }
    
        #output {
          margin-top: 20px;
          padding: 10px;
          background-color: #f1f1f1;
          border-radius: 4px;
          font-size: 14px;
        }
      </style>
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
      <br>
      <center>
      <form id="user-form">
        <h2>Registration</h2>
        Username: <input type="text" id="username"><br><br>
        Email: <input type="email" id="email"><br><br>
        Package: 
        <select id="package">
          <option value="Basic">Indian Tour Package </option>
          <option value="Premium">HoneyMoon Package </option>
          <option value="Enterprise">International Package </option>
        </select><br><br>
        Price: <input type="number" id="price" readonly><br><br>
        <input type="submit" value="Submit">
      </form>
      </center>
      <div id="output"></div>
    
      <script>
        const packageSelect = document.getElementById('package');
        const priceInput = document.getElementById('price');
    
        packageSelect.addEventListener('change', function() {
          const selectedPackage = packageSelect.value;
          let price = 0;
    
          if (selectedPackage === 'Basic') {
            price = 10000;
          } else if (selectedPackage === 'Premium') {
            price = 20000;
          } else if (selectedPackage === 'Enterprise') {
            price = 50000;
          }
    
          priceInput.value = price;
        });
    
        const form = document.getElementById('user-form');
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          const username = document.getElementById('username').value;
          const email = document.getElementById('email').value;
          const package = packageSelect.value;
          const price = priceInput.value;
    
          document.getElementById('output').innerHTML = `
            <strong>Details:</strong><br>
            Username: ${username}<br>
            Email: ${email}<br>
            Package: ${package}<br>
            Price: $${price}
          `;
        });
      </script>
      
</body>
</html>