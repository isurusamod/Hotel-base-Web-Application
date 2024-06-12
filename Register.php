<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oracal restaurant</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  
</head>

<body>
<img src="Images/4.jpg" alt="" class="image2">
<header class="header" id="navigation-menu">
    <div class="content">
      <nav>
        <br>
        <ul class="nav-menu">
          <li> <a href="index.html"><b><ins>Home</ins></b></a></li>
		  <li> <a href="Login.php" class="nav-link"><b><ins>Register</ins></b></a></li>
		  <li> <a href="book.php" class="nav-link"><b><ins>Book Now</ins></b></a></li>
		  <li> <a href="Restaurant.html"><b><ins>Restaurant</ins></b></a></li>
		  <li> <a href="Room.html"><b><ins>Rooms</ins></b></a></li>
		  <li> <a href="about.html"><b><ins>About</ins></b></a></li>
		  <li> <a href="#contact" class="nav-link"><b><ins>Contact</ins></b></a></li>
        </ul>
        <div class="hambuger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
  <style>
  </body>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="reg.php" method="POST">
            <label>Your Name</label>
            <input type="text" name="username" placeholder="username" required>
            
            <label>Email</label>
            <input type="email" name="email" placeholder="email" required>
            
            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>
            
            <input type="submit" value="Register">
			  <input type="submit" value="Back">
			  
		</form>
    </div>
</body>
</html>
