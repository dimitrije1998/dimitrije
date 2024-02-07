<!DOCTYPE html>
<html>
<head>
    <title>Buy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

li a.active {
  background-color: #111; /* Dodaj ovu liniju za označavanje aktivnog linka */
}

li a:hover {
  background-color: #111;
}


.img{
  margin-left: 27%;
}
.imgdiv{
  background-color: white;
}
.form-group {
    color: white; 
}
h2{
    color:white;
}
.container{
    background-color: gray;
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

    <div class="container">
        <h2 class="text-center">Enter data for buying</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="ime">Firstname:</label>
                <input type="text" class="form-control" id="ime" name="ime">
            </div>
            <div class="form-group">
                <label for="prezime">Lastname:</label>
                <input type="text" class="form-control" id="prezime" name="prezime">
            </div>
            <div class="form-group">
                <label for="adresa">Address:</label>
                <input type="text" class="form-control" id="adresa" name="adresa">
            </div>
            <div class="form-group">
                <label for="telefon">Phone:</label>
                <input type="text" class="form-control" id="telefon" name="telefon">
            </div>
            <div class="form-group">
                <label for="naruceniArtikal">Ordered item:</label>
                <input type="text" class="form-control" id="naruceniArtikal" name="naruceniArtikal">
            </div>
            <div class="form-group">
                <label for="kolicinaNarucenogartikla">Quantity of ordered item:</label>
                <input type="text" class="form-control" id="kolicinaNarucenogartikla" name="kolicinaNarucenogartikla">
            </div>
            <div class="form-group">
                <label for="cenaNarucenogartikla">Price of ordered item:</label>
                <input type="text" class="form-control" id="cenaNarucenogartikla" name="cenaNarucenogartikla">
            </div>
            <div class="form-group">
                <label for="datumNarucivanja">Date of order:</label>
                <input type="date" class="form-control" id="datumNarucivanja" name="datumNarucivanja">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prihvatanje podataka iz forme
            $ime = isset($_POST['ime']) ? $_POST['ime'] : '';
            $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : '';
            $adresa = isset($_POST['adresa']) ? $_POST['adresa'] : '';
            $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : '';
            $naruceniArtikal = isset($_POST['naruceniArtikal']) ? $_POST['naruceniArtikal'] : '';
            $kolicinaNarucenogartikla = isset($_POST['kolicinaNarucenogartikla']) ? $_POST['kolicinaNarucenogartikla'] : '';
            $cenaNarucenogartikla = isset($_POST['cenaNarucenogartikla']) ? $_POST['cenaNarucenogartikla'] : '';
            $datumNarucivanja = isset($_POST['datumNarucivanja']) ? $_POST['datumNarucivanja'] : '';

            // Podaci za povezivanje na bazu
            $servername = "localhost"; // Može biti i IP adresa ako nije lokalno
            $username = "root";
            $password = "";
            $dbname = "webshop";

            // Povezivanje na bazu
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Provera konekcije
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL upit za ubacivanje podataka (koristi prepared statement)
            $stmt = $conn->prepare("INSERT INTO kupci (ime, prezime, adresa, telefon, naruceniArtikal, kolicinaNarucenogartikla, cenaNarucenogartikla, datumNarucivanja) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $ime, $prezime, $adresa, $telefon, $naruceniArtikal, $kolicinaNarucenogartikla, $cenaNarucenogartikla, $datumNarucivanja);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<p class='text-success'>Podaci uspešno dodati u tabelu.</p>";
            } else {
                echo "<p class='text-danger'>Greška prilikom dodavanja podataka u tabelu.</p>";
            }

            // Zatvaranje prepared statementa i konekcije
            $stmt->close();
            $conn->close();
        }
        ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

