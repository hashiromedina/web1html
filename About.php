<!DOCTYPE html>
<html>
<head>
    <title>About</title>
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
    background: rgba(0, 0, 0, 0.85);
    border-radius: 10px;
    padding: 30px;
    max-width: 320px;
    box-shadow: 0px 4px 10px lightskyblue;
    border: 2px solid lightskyblue;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
}


.container img {
    max-width: 100%;
    height: auto;
     margin-bottom: 15px;
}
.container:hover {
      box-shadow: 0 0 25px #00f, 0 0 50px lightskyblue;
    }
h2, p {
    color: white;
}
strong{
    color: lightskyblue
}
.logo{
    width: 200;
    float: left;
    height: 70px;
}
.icon{
    padding-left: 40px;
    padding-top: 10px;
    float: left;
}
   
    </style>
</head>
<body>

   
<div class="nav">
        <a href="#">MEDINA</a>
        <a href="home.php">HOME</a>
        <a href="About.php">ABOUT</a>
        <a href="Service.php">SERVICE</a>
        <a href="Contact.php">CONTACT</a>
</div>


    <div class="container">
        <img src="about.jpg" width="200" height="200" alt="Avatar" class="avatar">
        <h2>"Bid smart, save big with DealDash!"</h2>
        <p><strong>Name:</strong> Hernanito III Roble Medina &nbsp;&nbsp;</p>
        <p><strong>Course & Yr:</strong> BSIT-1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p><strong>&nbsp;&nbsp;Age:</strong> 18 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
</body>
</html>
