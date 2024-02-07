<!DOCTYPE html>
<html>
<head>
<title>View</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://60a99bedadae98078522-a9b6cded92292ef3bace063619038eb1.ssl.cf2.rackcdn.com/images_stores_Dallas_DallasSLIDER_laptop.jpg');
            background-size: 1600px;
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

        .img {
            margin-left: 30%;
        }

        .divp {
            background-color: white;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: white; /* Dodao ovu liniju */
}

th {
    background-color: #333;
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

<?php
// Povezivanje s bazom podataka
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provjerite vezu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Dohvat podataka iz tabele "artikli"
$sql = "SELECT * FROM artikli";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Prikaz tabele sa podacima
    echo "<table><tr><th>Name</th><th>Current quantity</th><th>Price</th></tr>";
    // Prikaz podataka za svaki redak
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["naziv"]."</td><td>".$row["kolicina"]."</td><td>".$row["cena"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
