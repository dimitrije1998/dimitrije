<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: gray;
        }

        .h1 {
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
            margin-left: 27%;
        }

        .imgdiv {
            background-color: white;
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
</ul>
<br>
<div id="imgdiv" class="imgdiv">
    <img src="https://cdn.goconqr.com/uploads/flash_card/image_question/7812066/desktop_4653d98a-4c1c-4698-b1d8-893277a65d75.png"
         width="700px" height="600px" id="img" class="img">

</div>
</body>
</html>
