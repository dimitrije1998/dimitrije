<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>body {
            background-image: url('https://60a99bedadae98078522-a9b6cded92292ef3bace063619038eb1.ssl.cf2.rackcdn.com/images_stores_Dallas_DallasSLIDER_laptop.jpg');
            background-size: cover; /* Promenjeno u 'cover' kako bi se slika ispravno skalirala */
            background-repeat: no-repeat; /* Da bismo sprečili ponavljanje slike */
        }
    .h1{
    color: white;
    }
   .container {
    background-color:gray;
    color:white; 
}
    
    </style>
<body>
<h1 id="h1" class="h1">ModTech Web Shop</h1><br>
<div class="container">

    <h2 class="mt-5">Login here:</h2>

    <form class="mt-3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button><br>
        <a href="register.php">Register here</a>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "korisnik";
    $password = "lozinka";
    $dbname = "webshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="container mt-3"><div class="alert alert-success" role="alert">Novi zapis je uspješno dodan.</div></div>';
    } else {
        echo '<div class="container mt-3"><div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div></div>';
    }

    $conn->close();
}
?>

</body>
</html>
