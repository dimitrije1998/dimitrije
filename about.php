<!DOCTYPE html>
<html>
<head>
<title>About</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://60a99bedadae98078522-a9b6cded92292ef3bace063619038eb1.ssl.cf2.rackcdn.com/images_stores_Dallas_DallasSLIDER_laptop.jpg');
            background-size: cover; /* Promenjeno u 'cover' kako bi se slika ispravno skalirala */
            background-repeat: no-repeat; /* Da bismo sprečili ponavljanje slike */
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
            padding: 20px; /* Dodajemo padding oko teksta */
            max-width: 800px; /* Postavljamo maksimalnu širinu div-a */
            margin: 0 auto; /* Centriramo div na stranici */
        }

        #p {
            color: black; /* Postavljamo boju teksta na crnu boju */
            text-align: justify; /* Justifikujemo tekst */
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

    <div><br>
        <div id="divp" class="divp">
            <p id='p' class='p'>"Step into our realm of technological excellence, where every facet of innovation converges to redefine the boundaries of possibility. Here, amidst the digital landscape, we offer an unparalleled oasis of superior quality, advanced performance, and unwavering reliability, crafted to elevate your computing experience to new heights.

            Our mission is anchored in a steadfast commitment to delivering nothing short of the best. Whether you're an ardent gamer seeking the thrill of high-octane action, a discerning professional striving for unmatched productivity, or an individual simply looking to enhance your digital realm, we stand ready to meet your needs and exceed your expectations.

            At the core of our ethos lies a dedication to providing a comprehensive range of cutting-edge computing solutions. From powerhouse processors that redefine speed and efficiency to graphics cards that breathe life into every pixel, from motherboards that form the bedrock of reliability to memory modules that elevate performance to unprecedented levels, we offer a meticulously curated selection of components designed to empower you in your digital endeavors.

            But our commitment extends far beyond mere product offerings. With a team of seasoned experts at your service, we provide unparalleled support and guidance, ensuring that every step of your journey is met with clarity, confidence, and peace of mind. Whether you're navigating the vast landscape of options or seeking tailored recommendations to suit your specific needs, our dedicated customer support services are here to assist you every step of the way.

            Moreover, as stewards of innovation, we remain steadfast in our pursuit of the latest advancements in technology. Continuously scouring the market for the most cutting-edge products, we ensure that you always have access to the forefront of technological evolution. Your satisfaction is our driving force, and we are unwavering in our commitment to being your trusted partner in realizing your digital ambitions.

            So, come, explore our expansive offerings, and immerse yourself in a community of like-minded enthusiasts united by a shared passion for quality, performance, and reliability. Together, let us embark on a digital odyssey, where every click, every keystroke, and every interaction propels us forward towards a future limited only by our imagination.

            Welcome to our digital adventure – together, let us forge the future of technology, one innovation at a time."</p>
        </div>
    </div>

</body>
</html>
