<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medina</title>
  <style>
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('home.jpg.png'); 
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .title {
      overflow: hidden;
      padding: 10px 0;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      text-align: center;
    }

    .title a {
      display: inline-block;
      color: lightskyblue;
      padding: 12px 30px;
      text-decoration: none;
      font-size: 18px;
    }

    .title a:hover {
      color: black;
      background-color: lightskyblue;
      border-radius: 3px;
      opacity: 0.6;
      box-shadow: 0 0 10px 10px lightskyblue;
    }

    .main-text {
      position: absolute;
      top: 25%;
      left: 5%;
      max-width: 50%;
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

    @media (max-width: 1024px) {
      .main-text {
        max-width: 70%;
      }

      .main-text h1 {
        font-size: 50px;
      }

      .main-text p {
        font-size: 22px;
      }
    }

    @media (max-width: 768px) {
      .main-text {
        max-width: 80%;
        left: 10%;
      }

      .main-text h1 {
        font-size: 40px;
      }

      .main-text p {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <div class="title">
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

</body>
</html>