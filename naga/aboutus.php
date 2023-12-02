<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about-us.css"> <!-- Link to your CSS file -->
    <title>About Us</title>
    <style>
        /* Additional styles can be added inline or in an external CSS file */
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Times New Roman', Times, serif;
    
      }

      .header1 {
        width: 100%;
        background: #fff;
        padding-left: 2%;
        padding-right: 2%;
      }

      .header1 p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        font-size: 13px;
      }
      .top-nav {
        display: flex;
        padding: 13px 0 10px;
        border-bottom: 1px solid #bababa;
        text-align: center;
        padding: 15px 10px;
      }
	  .icons {
        display: flex;
        padding: 0%;
        margin-left: auto;
        gap: 30px;
        cursor: pointer;
      }
      nav {
        display: flex;
        position: relative;
        justify-content: space-between;
        text-align: center;
        padding: 15px 10px;
      }
      nav .icon {
        font-size: 25px;
        font-weight: 800;
        margin-right: 10px;
        margin-left: 5px;
        text-transform: uppercase;
        color: black;
      }
      nav ul {
        display: flex;
        margin: auto 0;
        flex-grow: 1;
      }

      nav ul li {
        margin: 0 2px;
        border-left: 1px solid #bababa;
        padding: 5px;
      }

      nav ul li a {
        color: white ;
        font-weight: bolder;
        font-size: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-left: 15px;
      }

      nav ul li a:hover a {
        background: #fff;
      }
      nav .search_box {
        display: flex;
        height: 30px;
        padding-left: 10px;
        margin-top: 5px;
        flex-grow: 1;
        margin-left: 20px;
      }

      nav .search_box input {
        border: 1px solid;
        padding: 10px;
        box-shadow: 0 0 10px gray;
        background: #fff;
        height: 100%;
        padding: 0 10px;
        font-size: 15px;
        width: 350px;
      }

      nav .search_box span { font-size: 15px;
        background: #fff;
        height: 100%;
        padding: 5px;
        position: relative;
        cursor: pointer;
        z-index: 1;
      }
	  .second-nav {
        display: flex;
        align-items: center;
        background: #fff;
        border-top: 1px solid #bababa;
      }
      .second-nav ul {
        display: flex;
        list-style: none;
        padding-left: 40px;
        margin-top: 8px;
        margin-left: auto;
      }

      .second-nav ul li {
        margin: 0 5px;
      }

      .second-nav ul li a {
        font-size: 13px;
        color: #B68D52 ;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .second-nav ul li a:hover {
        position: relative;
      }

      .second-nav ul li a:hover::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #B68D52  ;
      }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            
            color: black;
            padding: 10px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        h2 {
            color: black;
        }

        p {
            line-height: 1.5;
        }
        h1 {
        font-size: 2.5rem;
        color: #333;
    }

    p {
        margin-bottom: 1.5rem;
    }

    .mission {
        background-color: #f5f5f5;
        padding: 2rem;
        border-radius: 10px;
    }

    .made-with-love {
        background-color: #f5f5f5;
        padding: 2rem;
        border-radius: 10px;
    }

    .pinky-promiso {
        background-color: #f5f5f5;
        padding: 2rem;
        border-radius: 10px;
    }
    .featured_item_box{
          margin: 120px;
          margin-top: 5px;
          display: grid;
          grid-template-columns: 1fr 1fr 1fr ;


        /* Add more styles as needed */
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aboutus </title>
</head>
<body style="background-color: white ; font-family: Arial, sans-serif;">
    <header style="padding: 20px; background-color: #B68D52 ; text-align: center;">
        <h1 style="color: #333333; font-size: 24px; margin: 0;"></h1>
    </header>

    <body>
    <div class="header1">
      <div class="top-nav">
        <p>UP TO 40% OFF EVERYTHING | FREE JEWELRY BOX WITH ORDERS ₱5000+ | FREE SHIPPING NATIONWIDE</p>
        <div class="icons">
            <a href="/LogIn_Register/logIn.html"><i class="fa-regular fa-user" style="color: #000000;"></a></i>
            <a href="/Wishlist/Wishlist.html"><i class="fa-regular fa-heart" style="color: #d21414;"></a></i>
            <a href="/Cart/Cart.html"><i class="fas fa-shopping-cart" style="color: #278b3b;"></a></i>
        </div>
      
    </div>

  
	
	<nav class="second-nav">
        <div class="icon">Kenny Pairs</div>
            <div class="search_box">
                <input type="search" placeholder="Search">
                <span class="fas fa-search"></span>
            </div>
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="cart.php">CART</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="sign-in.php">SIGN IN</a></li>
                    <li><a href="sign-up.php">SIGN UP</a></li>
                </ul>
            </div>
           </nav>
      
    <main style="padding: 20px; background-color: #FFFFFF; text-align: center;">
        <h2 style="color: #333333; font-size: 20px; margin: 0;"></h2>
        <p style="color: #777777; font-size: 16px; margin: 10px 0;"></p>
        <img src="about1pic.webp" alt="Placeholder Image" style="width: 1000px; height: 400px;">
    
        

<body>

    <header>
        <h1>Welcome to Kenny Pairs</h1>
        <p>A jewelry store in the Philippines, where every hour is golden hour. 

We provide well-made jewelry accessories at fair prices because we believe everyone deserves to experience the confidence-boosting power of high-quality jewelry.</p>
    </header>

    <div class="container">
        <section>
            <h2>Why we started a jewelry store in the Philippines</h2>
            <p>We began Penny Pairs in 2020 because we found that traditional jewelry stores were intimidating, covered in glass, with prices that were “available upon request.” 

          Meanwhile, fast fashion outlets were offering jewelry of questionable quality, made with cheap metals that would break easily and cause allergic reactions. 

              We wanted an alternative.</p>
        </section>

        <section>
            <h2>Our approach to jewelry accessories</h2>
            <p>We offer a worry-free experience when it comes to jewelry. 

This means you don’t need to worry about the price tag or the longevity, as our catalog is affordable yet high-quality. 

You also don’t need to worry about allergies, negative environmental impact, or unethical practices because we use hypoallergenic, sustainable, recycled materials and work with manufacturers that can certify conflict-free ethical processes.

After all, it shouldn’t be so hard to buy jewelry you won’t regret.</p>
    </section>

        <section>

        <img src="about2pic.webp" alt="Placeholder Image" style="width: 1000px; height: 400px;">
         
    <div class="featured_item_box">
     <div class="mission">
         <h2>Our Mission</h2>
          <p>To boost your confidence through well-made, worry-free accessories. Jewelry should make you feel like the best version of yourself.</p>
        </div>
         <div class="made-with-love">
             <h2>Made with Love</h2>
              <p>We use 18 karat gold, sterling silver, and eco-brass. In our gold-plated pieces, the gold is 10x thicker (1 to 2.5μm) compared to the average affordable jewelry store in the Philippines.</p>
             </div> 
             <div class="pinky-promiso"> 
                <h2>Our Pinky Promiso</h2>
                 <p>Life isn't always perfect, so we offer a 180-day guarantee against any manufacturing defects. Your satisfaction is our top priority.</p>
                 </div>
                 </div>
                 <img src="about4pic.webp" alt="Placeholder Image" style="width: 1000px; height: 400px;">

                 
                 <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us. We'd love to hear from you!</p>
            <div>
                <p>Email: info@kennypairs.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Jewelry Street, Metro City, Philippines</p>
            </div>
        </div>
    </section>
</body>
</html>
