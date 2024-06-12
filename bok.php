<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "oracaldb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Checkin = mysqli_real_escape_string($conn, $_POST['Checkin']);
    $Checkout = mysqli_real_escape_string($conn, $_POST['Checkout']);
    $Number = mysqli_real_escape_string($conn, $_POST['Number']);

    $sql = "INSERT INTO book (username, email, Checkin, Checkout, Number) VALUES ('$name','$email','$Checkin','$Checkout','$Number')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "<script>alert('Your Booking is Successful Added');window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
