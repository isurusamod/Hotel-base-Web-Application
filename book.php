<!DOCTYPE html>
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

<head>
    <title>Hotel Booking</title>
    <style>
	
	
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
	
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        
        h1 {
            margin: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hotel Booking</h1>
    </header>
    
    <div class="container">
        <h2>Book Your Stay</h2>
        <form action="bok.php" method="POST">
            <div class="form-group">
               <label>Name</label>
			   <input type="text" name="name" placeholder="Name" required="true">
				
            </div>
            <div class="form-group">
                 <label>Email</label>
            <input type="text" name="email" placeholder="Email" required="true">
		        <label>Check-in Date:</label>
            <input type="date" name="Checkin" placeholder="Checkin" required="true">
			    <label>Check-Out Date:</label>
            <input type="date" name="Checkout" placeholder="Checkout" required="true">
           </div>
            
            <div> 
                <label>Number of Nights:</label>
                 <select class="form-group" name="Number" value="Number"  required="true">
                    <option value="1">1 night</option>
                    <option value="2">2 nights</option>
                    <option value="3">3 nights</option>
                    <option value="4">4 nights</option>
                    <option value="5">5 nights</option>
			
                </select>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
