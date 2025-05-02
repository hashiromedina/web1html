<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
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

        #me {
            width: 100px;
            height: 80px;
            padding-left: 40px;
            padding-top: 10px;
            float: left;
        }

        .nav1 {
            overflow: hidden;
            padding: 10px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
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
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 20px;
        }
        .services {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 20px;
        }
        .service1 {
            width: calc(33.33% - 20px);
            min-width: 170px;
            max-width: 190px;
            height: 370px;
            padding: 50px;
            color: white;
            background-color: black;
            border: 2px solid lightskyblue;
            border-radius: 10px;
            opacity: 0.9;
            box-shadow: lightskyblue;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0px 4px 10px lightskyblue;
        }
        
        .service1:hover {
      transform: translateY(-5px);
      background: black;
    }
        .service-card img {
            width: 50%;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
        }
        .service-card h3 {
            margin-top: 20px;
            font-size: 22px;
        }
        .service-card p {
            margin: 10px 0;
            font-size: 16px;
        }
        .submit {
            display: inline-block;
            padding: 10px 40px;
            background: lightskyblue;
            color: black;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            cursor: pointer;
        }

        h1 {
            color: lightskyblue;
            font-size: 32px;
            text-shadow: 0 0 10px rgba(0, 105, 204, 0.8), 0 0 20px rgba(0, 105, 204, 0.6);
        }
        
        h2 {
            width: 100%;
            text-align: center;
            color: white;
            font-size: 15px;
        }

        p {
            font-weight: 900;
            font-size: 15px;
            font-family: monospace;
            line-height: 15px;
        }

        strong {
            color: lightskyblue;
            font-size: 15px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }

        .popup-content {
	        background-color: black;
	        text-align: center;
            margin-top: 50px;
	        padding: 30px 50px;
	        align-items: center;
	        width: 800px;
	        border-radius: 10px;
        	font-size: 16px;
	        line-height: 1.5;
            border: 2px solid lightskyblue;
        }

        .close-btn {
            display: inline-block;
            padding: 10px 80px;
            background: lightskyblue;
            color: black;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            margin-top: 20px;
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
        <h1>"DealDash: The Smart Way to Shop and Save Big!</h1><br><br><br>
        <div class="services">
        <div class="service1" onclick="showPopup('Price Tracker')">
            <img src="price.webp" width="185" height="170" alt="Avatar" class="avatar">
            <h2>Price Tracker</h2>
            <p><center><strong>Monitor prices and get instant alerts on drops, ensuring you never miss a deal!</strong></center></p>
            <button class="submit">Read More</button>
        </div>

          <div class="service1" onclick="showPopup('Coupon Code Finder')">
             <img src="coupon.webp" width="185" height="170" alt="Avatar" class="avatar">
                <h2>Coupon Code Finder</h2>
                <p><center><strong>Easily find verified coupon codes for your favorite stores and save money with a click!</strong></center></p>
                <button class="submit">Read More</button>
          </div>

        <div class="service1" onclick="showPopup('Sales and Discount Alerts')">
            <img src="sales.webp" width="185" height="170" alt="Avatar" class="avatar">                
            <h2>Sales and Discount Alerts</h2>
            <p><center><strong>Receive real-time notifications for flash sales and discounts from your favorite retailers!</strong></center></p>
            <button class="submit">Read More</button>
            </div>
        </div>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content" id="popup-content">
            <img src="price.webp" width="185" height="170" alt="Avatar" class="avatar">
            <h2 id="popup-title"></h2>
            <p><strong>Unlock the power of smart shopping with our Price Tracker service, designed to help you save money effortlessly by providing real-time price monitoring across multiple retailers, access to historical price data for informed buying decisions, customizable alerts for personalized price thresholds, a user-friendly interface for easy navigation, and mobile notifications to keep you updated on the go. Start maximizing your savings today by signing up and taking control of your shopping experience!</strong></p>
            <button class="close-btn" onclick="closePopup()">Close</button>
        </div>
    </div>

    <div id="popup1" class="popup">
        <div class="popup-content" id="popup-content1">
            <img src="coupon.webp" width="185" height="170" alt="Avatar" class="avatar">
            <h2 id="popup-title1"></h2>
            <p><center><strong>Discover incredible savings with our Coupon Code Finder, designed to make your shopping experience more affordable and enjoyable by providing access to a vast database of verified coupon codes for thousands of retailers, allowing you to easily search for discounts with just a few clicks, contribute to our community by submitting your own successful codes, stay updated with exclusive offers and promotions, and enjoy the convenience of easily copying codes for quick application at checkout. Join us today and start saving more on every purchase!</strong></center></p>
            <button class="close-btn" onclick="closePopup('popup1')">Close</button>
        </div>
    </div>

    <div id="popup2" class="popup">
        <div class="popup-content" id="popup-content2">
            <img src="sales.webp" width="185" height="170" alt="Avatar" class="avatar">
            <h2 id="popup-title2"></h2>
            <p><center><strong>Stay ahead of the savings game with our Sales & Discount Alerts service, designed to ensure you never miss a great deal by allowing you to customize your preferences for real-time notifications about flash sales, seasonal discounts, and exclusive promotions from your favorite retailers, all delivered directly to your inbox or mobile device, so you can shop smart and save big on every purchase. Join our community of savvy shoppers today and take advantage of the best sales and discounts available to get the most value for your money!</strong></center></p>
            <button class="close-btn" onclick="closePopup('popup2')">Close</button>
        </div>
    </div>

    <script>
        function showPopup(title) {
            if (title === 'Price Tracker') {
                document.getElementById('popup-title').textContent = 'Price Tracker';
                document.getElementById('popup').style.display = 'flex';
            } else if (title === 'Coupon Code Finder') {
                document.getElementById('popup-title1').textContent = 'Coupon Code Finder';
                document.getElementById('popup1').style.display = 'flex';
            } else if (title === 'Sales and Discount Alerts') {
                document.getElementById('popup-title2').textContent = 'Sales and Discount Alerts';
                document.getElementById('popup2').style.display = 'flex';
            }
        }

        function closePopup() {
            document.querySelectorAll('.popup').forEach(function(popup) {
                popup.style.display = 'none';
            });
        }
    </script>

</body>
</html>

