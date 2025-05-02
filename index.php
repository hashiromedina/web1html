<!DOCTYPE html>
<html>
<head>
  <title>Medina</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Helvetica, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      background-image: url("home.jpg.png");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .nav {
      overflow: hidden;
      padding: 10px 0;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      text-align: center;
      display: none; /* Initially hidden */
    }

    .nav a {
      display: inline-block;
      color: lightskyblue;
      padding: 12px 30px;
      text-decoration: none;
      font-size: 18px;
    }

    .nav a:hover {
      color: black;
      background-color: lightskyblue;
      border-radius: 3px;
      opacity: 0.6;
      box-shadow: 0 0 10px 10px lightskyblue;
    }

    .container {
      background-color: black;
      border-radius: 15px;
      padding: 30px;
      width: 320px;
      position: absolute;
      top: 50%;
      right: 500px;
      transform: translateY(-50%);
      text-align: center;
      box-shadow: 0 0 15px lightskyblue;
      border: 2px solid lightskyblue;
      transition: 0.3s;
    }
    .container:hover {
      box-shadow: 0 0 25px #00f, 0 0 50px lightskyblue;
    }

    .main-text {
      position: absolute;
      top: 25%;
      left: 5%;
      max-width: 50%;
      visibility: hidden;
    }

    .main-text h1 {
      font-size: 65px;
      color: white;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 
                   0 0 10px rgba(255, 255, 255, 0.3);
      font-weight: bold;
      line-height: 1.2;
      text-align: left;
    }

    .main-text p {
      font-size: 26px;
      color: lightskyblue;
      line-height: 1.6;
      text-align: left;
    }

    .container img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    h2 {
      text-align: center;
      color: white;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }

    input[type="text"],
    input[type="password"] {
      width: 80%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      text-align: center;
      border: 2px solid lightskyblue;
      box-shadow: 0 0 5px lightcyan;
    }

    input[type="submit"] {
      width: 80%;
      background-color: grey;
      color: lightcyan;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>


<div class="container" id="login-container">
  <img src="index.jpg" width="200" height="200" alt="Avatar">
  <h2>"Bid smart, save big with DealDash!"</h2>
  <form id="login-form">
    <label for="username">Username:</label>
    <input type="text" id="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" required><br><br>

    <input type="submit" value="Login">
  </form>
</div>

<div class="nav" id="navbar">
  <a href="#">MEDINA</a>
  <a href="home.php">HOME</a>
  <a href="About.php">ABOUT</a>
  <a href="Service.php">SERVICE</a>
  <a href="Contact.php">CONTACT</a>
</div>

<div class="main-text" id="main-text">
  <h1>WIN GREAT DEALS WITH DEALDASH!</h1>
  <p>DealDash is the ultimate online auction platform where you can bid, save, and win brand-new products at unbeatable prices. Join today and experience the thrill of bidding on top-quality items!</p>
</div>

<script>
  document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "user" && password === "password") {
      document.getElementById("login-container").style.display = "none"; 
      document.getElementById("navbar").style.display = "block"; 
      document.getElementById("main-text").style.visibility = "visible"; 
    } else {
      alert("Invalid username or password!");
    }
  });
</script>

</body>
</html>
