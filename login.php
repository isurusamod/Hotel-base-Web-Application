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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background-image.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .footer {
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Here</h1>
        <form action="lgn.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required="true">
         
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required="true">

            <input type="submit" name="login" value="Login">
            <p>New Here? <a href="Register.php">Register</a></p>
        </form>
    </div>
</body>

</html>