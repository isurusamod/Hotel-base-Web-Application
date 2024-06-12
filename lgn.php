<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $db_password = ""; 
    $database = "oracaldb";

    $conn = mysqli_connect($servername, $username, $db_password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn, $email);

    $query = $conn->prepare("SELECT email, password FROM userreg WHERE LOWER(email) = LOWER(?)");
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows == 1) {
        $query->bind_result($storedEmail, $storedPassword);
        $query->fetch();

        if (password_verify($password, $storedPassword)) {
            $_SESSION['email'] = $storedEmail;
            header("Location: book.php"); 
            exit();
        } else {
            echo "Login failed: Incorrect password";
        }
    } else {
        echo "Login failed: Email not found";
    }

    $query->close();
    $conn->close();
}
?>