<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body {
    background-color: gray;
}
.h1{
    color: white;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

.contactDiv {
    color: white;
}

.form-group {
    color: white; 
}

.map-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.container-contactDiv{
margin-left: 16%;
color: white;
}
.btn-container {
            text-align: right;
            margin-right: 20px;
            margin-top: 10px;
        }
</style>
</head>
<body>
<h1 id="h1" class="h1">ModTech Web Shop</h1><br>
<div class="btn-container">
    <a href="register.php" class="btn btn-primary mr-2">Register</a>
    <a href="log.php" class="btn btn-primary">Log In</a>
</div><br>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="view.php">View articles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="buy.php">Buy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
</ul> <br>

<div class="container-contactDiv">
    <p>Address: Mišarska 1</p><br>
    <p>Email: krantic1998@gmail.com</p><br>
    <p>Phone: 0643423263</p>
</div><br>

<div class="map-container">
    <iframe width="70%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Misarska%201+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
</div><br>

<form action="" method="post" class="container mt-4">
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
// Povezivanje sa bazom podataka
$servername = "localhost";
$username = "root"; // Promeniti sa vašim korisničkim imenom
$password = ""; // Promeniti sa vašom lozinkom
$dbname = "webshop";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Provera da li je forma poslata
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prihvatanje podataka iz forme ako su postavljeni
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    // Upit za unos podataka u bazu
    $sql = "INSERT INTO contactusers (firstname, lastname, email, message)
    VALUES ('$firstname', '$lastname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>
