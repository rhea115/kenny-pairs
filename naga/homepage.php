<!DOCTYPE html>
<html lang="en">
<style>
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
  
  

        .Accessories h2{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bolder;
        font-size: 25px;
        text-align: center center;
        margin: 20px;
        margin-top: 30px;
        
       }

       .featured_item{
          width: 100%;
          height: 80vh;
      }

       .featured_item_box{
          margin: 60px;
          margin-top: 5px;
          display: grid;
          grid-template-columns: 1fr 1fr 1fr 1fr ;
      }

      .featured_item_card{
          width: 230px;
          height: 370px;
          justify-content: center;
          text-align: center;
          padding: 5px;
          border: 1px solid #919191;
          margin: 20px 30px;
      }

      .featured_item_card:hover{
          box-shadow: 0 0 5px #000;
      }

      .featurde_item_img img{
          width: 150px;
      }

      .featurde_item_tag .writer{
          color: #919191;
      }

      .categories{
          color: #000;
          margin-top: 8px;
      }

      .item_price{
          margin-top: 8px;
          font-weight: bold;
          margin-bottom: 10px;
      }

       .item_price sub{
          font-weight: 100;
          padding: 0 5px;
      }

       .f_btn{
          padding: 8px 20px;
          border: 2px solid #6c3428;
          text-decoration: none;
          color: #000;
          transition: background-color 0.3s;
      }
      .f_btn:hover{
        background-color: #E2C799;
       }
       
      
        .footer {
            background-color: #000;
            margin-top: 125%;
            height: 30px;
            width: 100%;
        }

        .footer_container {
            display: flex;
            justify-content: space-between;
            height: 100%;
            padding: 0 20px;
        }
        .about {
            align-items: center;
            margin-left: 50px;
            margin-top: 10px;
        }
        .about a {
            display: inline-block;
            margin: 0 5px;
        }

        .footer_container .about1,
        .footer_container .about2 {
          font-size: 13px;
            margin-top: 10px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bolder;
            color: #fff;
        }
      //shop now 
      .f_btn {
    padding: 8px 20px;
    border: 2px solid #6c3428;
    text-decoration: none;
    color: #000;
    transition: background-color 0.3s;
    display: inline-block; /* Ensures the button is displayed as an inline element */
}
.footer {
            background-color: #000;
            margin-top: 100px; /* Adjust the margin-top value as needed */
            height: 80px; /* Adjust the height value as needed */
            width: 100%;
            color: #fff;
            text-align: center;
            padding-top: 20px;
            position: relative;
        }

        .footer_container {
            display: flex;
            justify-content: space-between;
            height: 100%;
            padding: 0 20px;
        }

        .about {
            align-items: center;
            margin-left: 50px;
            margin-top: 10px;
        }

        .about a {
            display: inline-block;
            margin: 0 5px;
            text-decoration: none;
            color: #fff;
        }

        .footer_container .about1,
        .footer_container .about2 {
            font-size: 13px;
            margin-top: 10px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bolder;
            color: #fff;
        }
 /* Add to Cart Modal styles */
 .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
//list

.categories {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }

  .categories li {
    margin: 0 15px;
  }
  .categories a {
    text-decoration: none;
    color: #6c3428;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s;
  }

  .categories a:hover {
    color: #fff;
  }

 
 
      

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X</title>
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
                    <li><a href="homepage.php">HOME</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="cart.php">CART</a></li>
                    <li><a href="sign-in.php">SIGN IN</a></li>
                    <li><a href="sign-up.php">SIGN UP</a></li>
                </ul>
            </div>
           </nav>
      
        


    <main style="padding: 20px; background-color: #FFFFFF; text-align: center;">
        <h2 style="color: #333333; font-size: 20px; margin: 0;"></h2>
        <p style="color: #777777; font-size: 16px; margin: 10px 0;"></p>
        <img src="rings/the BIGGEST SALE.jpg" alt="Placeholder Image" style="width: 1300px; height: 500px;">
    
    <div class="Accessories">
        <h2>Featured Accessories</h2>
    </div>  
    <a href="shop.php" class="f_btn" style="margin-bottom: 20px;">Shop Now</a>
</div>
        
        <div class="featured_item">
      <div class="featured_item_box">
          <div class="featured_item_card">
              <div class="featurde_item_img">
                  <a href="/BookDet/TSITP.html"><img src="rings/ring1.webp"></a>
              </div>
              <div class="featurde_item_tag">
               <h3>Venus Gold Hoops</h3>
                  <p class="item_price">₱1,759.00 <sub><del>₱2,199.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i>
              </div>               
            </div> 
            <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="images/earing10.webp"></a>
              </div>
              <div class="featurde_item_tag">
             <h3> Janet Gold Hoops</h3>
                  <p class="item_price">₱2,099.00<sub><del>₱2,500.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="NECKLACES/3.webp"></a>
              </div>
              <div class="featurde_item_tag">
              <h3>Nadine Gold Hoops</h3>
                  <p class="item_price">₱2,079.00<sub><del>₱2,599.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="bracelets/3.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="images/earing9.webp"></a>
              </div>
              <div class="featurde_item_tag">
              <h3>Nadine Gold Hoops</h3>
                  <p class="item_price">₱2,079.00<sub><del>₱2,599.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="bracelets/7.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="NECKLACES/9.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="images/earing6.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="bracelets/5.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="images/earing10.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="NECKLACES/1.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="featured_item_card">
              <div class="featurde_item_img">
                <a href="/BookDet/WTCDS.html"><img src="rings/ring7.webp"></a>
              </div>
              <div class="featurde_item_tag">
                  <h3>Donut Gold Huggies</h3>
                  <p class="item_price">₱1,850.00<sub><del>₱2,050.00</del></sub></p>
                  <a href="#" class="f_btn">Add to Cart</a>
                  <i class="fa-regular fa-heart" style="color: #d21414;"></i> 
              </div> 
              </div>
              <div class="footer">
        <div class="footer_container">
            <div class="about">
                <a href="#">About Us</a>
                <a href="#">Contact</a>
                <!-- Add more links as needed -->
            </div>
            <div class="about2">
                <p>&copy; 2023 Your Company Name</p>
            </div>
        </div>
    </div>
              </main>

              <!-- Add to Cart Modal -->
    <div id="addToCartModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="addedToCartMessage"></p>
        </div>
    </div>

    <script>
    
    document.addEventListener('DOMContentLoaded', function () {
    // Get all "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.f_btn');

    // Add click event listener to each button
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Get the product details from the clicked button's parent
            const productCard = button.closest('.featured_item_card');
            const productName = productCard.querySelector('h3').innerText;
            const productPrice = productCard.querySelector('.item_price').innerText;

            // You can send this data to the server using AJAX for server-side processing

            // Display a confirmation message to the user
            document.getElementById('addedToCartMessage').innerText = `Added ${productName} to the cart!`;
            document.getElementById('addToCartModal').style.display = 'block';
        });
    });

    // Add event listener to close the modal
    document.querySelector('.close').addEventListener('click', function () {
        document.getElementById('addToCartModal').style.display = 'none';
    });
});

</script>   
    
            



              
             
       
    
   
</body>
</html>
