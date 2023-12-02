<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>Portfolio | RheaMae Naga</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cover.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="try.js"></script>
</head>
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
  

.btn-bd-primary {
  --bd-violet-bg: #712cf9;
  --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

  --bs-btn-font-weight: 600;
  --bs-btn-color: var(--bs-white);
  --bs-btn-bg: var(--bd-violet-bg);
  --bs-btn-border-color: var(--bd-violet-bg);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-hover-bg: #6528e0;
  --bs-btn-hover-border-color: #6528e0;
  --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
  --bs-btn-active-color: var(--bs-btn-hover-color);
  --bs-btn-active-bg: #5a23c8;
  --bs-btn-active-border-color: #5a23c8;
}

.bd-mode-toggle {
  z-index: 1500;
}

.bd-mode-toggle .dropdown-menu .active .bi {
  display: block !important;
}

.px-3 {
  margin: 0!important;
  padding: 0!important;
}

#about {
  width: 100%;
  height: auto;
  background: white;
  padding-top: 130px;
  padding-bottom: 60px;
  background-image: url();
  background-attachment: fixed;
  backround-color: white;
}

#about .div-img-bg {
  padding-bottom: 30px;
  border: 20px solid #FDB7DA ;

}

#about .div-img-bg .about-img img {
  width: 100%;
  margin-top: -60px;
  margin-left: 40px;
  height: 400px;
  -o-object-fit: cover;
  object-fit: cover;
}

#about .about-descr .h1 {
  font-family: "Playfair", serif;
  color: #999999;
  font-size: 28px;
  text-align: left;
}

#about .about-descr .separator {
  max-width: 80%;
  margin-bottom: 0;
  text-align: left;
  font-family: Poppins;
  font-size: large;
  color: #7c7c7c;
}

#about .about-riri{
  font-family: Poppins;
  color: #FF62B1;
  font-size: 30px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 600;
}

#pf {
  height: auto;
  padding-bottom: 60px;
  background-color: #ffffff;
  background-image: url(images/2nd.jpg);
  background-attachment: fixed;
}

#pf .pf-h1 {
  padding-top: 40px;
  margin-bottom: 20px;
}

#pf .pf-h1 h1 {
  font-family: Poppins;
  color: #FF62B1;
  font-size: 30px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 600;
}




.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  
}

.form-control {
  height: 13px;
  background: transparent;
  color: rgba(255, 142, 200, 0.8) !important;
  font-size: 14px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: 1px solid rgba(255, 182, 193); 
}

  .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5) !important; 
  }

  .form-control::-moz-placeholder {
    color: rgba(255, 255, 255, 0.5) !important; 
  }

  .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5) !important; 
  }

  .form-control:-moz-placeholder {
    color: rgba(255, 255, 255, 0.5) !important; 
  }

  .form-control:focus, .form-control:active {
    background: transparent;
    border-color: rgba(255, 255, 255, 0.5) !important; 
  }

textarea.form-control {
  height: inherit !important; 
}

.wrapper {
  width: 100%;
  overflow: hidden;
  border-radius: 30px;
  -webkit-box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18);
  box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18); 
}

.contact-wrap {
  background: #272a34; 
}

  .contact-wrap h3 {
    color: #fff; 
  }

.info-wrap {
  background: #1c1e25; 
}

.info-wrap h3 {
  color: white;
  font-size: 18px;
  position: relative; 
}

.info-wrap .dbox {
width: 100%;
margin-bottom: 25px; 
}

.info-wrap .dbox:last-child {
  margin-bottom: 0; 
}

.info-wrap .dbox p {
  margin-bottom: 0; 
}

.info-wrap .dbox p span {
  font-weight: 400;
  color: #fff; 
}

.info-wrap .dbox p a {
  color: rgba(255, 255, 255, 0.3); 
}

.info-wrap .dbox .icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.02); 
}

.info-wrap .dbox .icon span {
  font-size: 20px;
  color: #fff; 
}

.info-wrap .dbox .text {
width: calc(100% - 50px); 
}

.btn {
  padding: 12px 16px;
  cursor: pointer;
  border-width: 1px;
  border-radius: 2px;
  font-size: 14px;
  font-weight: 400;
  -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  position: relative;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; 
}

@media (prefers-reduced-motion: reduce) {
.btn {
  -webkit-transition: none;
  -o-transition: none;
  transition: none; } 
}

.btn:hover, .btn:active, .btn:focus {
  outline: none !important;
  -webkit-box-shadow: 0px 10px 20px -6px rgba(121, 105, 105, 0.645) !important;
  -moz-box-shadow: 0px 10px 20px -6px rgba(121, 105, 105, 0.645) !important;
  box-shadow: 0px 10px 20px -6px rgba(121, 105, 105, 0.645) !important; 
  
}

.btn.btn-primary {
  background: lightpink !important;
  border-color: lightpink !important;
  color: #fff; 
  align-center 
}

.btn.btn-primary:hover, .btn.btn-primary:focus {
  border-color: white!important;
  background: #d67a0c !important; 
}

.contactForm .form-control {
  border: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  padding: 0; 
}

#contactForm .error {
  color: #f65c78;
  font-size: 12px; 
}

#contactForm .form-control {
  font-size: 16px;
  background-color: #272a34;
}

#message {
  resize: vertical; 
}

#form-message-warning, #form-message-success {
  display: none; 
}

#form-message-warning {
  color: red;
}

#form-message-success {
  color: #28a745;
  font-size: 18px;
  font-weight: 500; 
}

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-size: 16px;
  font-weight: 500; 
}

.form-control {
  background: #272a34;
}

.row .col-md-6 {
  padding-left: 0!important;
  padding-right: 0!important;
}

.dbox .text p {
  color: #72747a;
}

.dbox .dbox-p {
  padding-top: 15px;
}

.pl-3 {
  padding-left: 1rem;
}

.info-wrap .mb-4 {
  color: #72747a;
}

.mb-4 {
  margin-bottom: 3.5rem!important;
}

.p-4 {
  padding: 3.5rem!important;
}

.heading-section {
  font-family: Poppins;
  color: #ccc;
  font-size: 25px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 600;
}

#footer {
  background:  #f7f7f7;
  padding-top: 50px;
  padding-bottom: 50px;
}

#footer .socials-media {
  width: 100%;
}

#footer .socials-media ul {
  display: inline-block;
  float: none;
  margin: 0 0 20px 0;
}

#footer .socials-media ul li {
  float: left;
  margin-left: 10px;
  margin-right: 10px;
}

#footer .socials-media ul li a {
  font-size: 24px;
  color: #999;
  letter-spacing: 0.1em;
  font-weight: 500;
  background: transparent;
  text-transform: uppercase;
  transition: all 0.5s ease-in-out 0s;
}

#footer .socials-media ul li a:hover {
  color: #daa45a;
  transition: all 0.5s ease-in-out 0s;
}

#footer p {
  font-family: Poppins;
  font-size: 12px;
  letter-spacing: 0.1em;
  font-weight: 600;
  margin-top: 0;
  text-transform: uppercase;
}

.credits {
  font-size: 13px;
}


@media (max-width: 767px) {

  nav {
    padding: 20px 15px;
  }

  .nav-menu {
    margin-top: 40px;
    display: none;
    float: none;
    width: 100%;
  }

  .nav-menu li {
    float: none;
    width: 100%;
    text-align: center;
    border-top: 1px solid #f7f7f7;
    line-height: 45px;
    margin-left: 0;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .responsive {
    float: right;
    padding-top: 15px;
    display: block;
  }

  .head-info .header-content h1 {
    font-size: 32px;
  }

  #about .div-img-bg {
    padding: 0;

  }

  #about .div-img-bg .about-img img {
    margin-top: 0%;
    margin-left: calc(0% - 0px);
  }

  #about .about-descr .p-heading {
    font-size: 20px;
  }

  #about .about-descr .separator {
    max-width: 100%;
    margin-bottom: 0;
  }

  #portfolio .portfolio-list .nav li {
    float: none;
    margin: 20px;
    display: inline-block;
  }

  #journal .journal-block .journal-info {
    margin-bottom: 30px;
  }

  .contact-contact {
    margin-bottom: 30px;
  }

  #footer .socials-media ul li {
    margin-right: 0;
    margin-left: 0;
    float: none;
    display: inline-block;
  }
  button {
            background-color: #E3BC83;
            color: white;
            padding: 14px 20px;
            margin: 100px auto;
            border: none;
            cursor: pointer;
            width: 100%;

        }

        button:hover {
            opacity: 0.8;
        }
  </style>
  

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

<div id="about" class="paddsection">

    <div class="about-riri text-center">
      <h1 class="section-title">About Me</h1>
    </div>
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <div class="div-img-bg">
          <div class="about-img">
            <img src="images/me.PNG" class="img-fluid" alt="me">
          </div>
        </div>
      </div>
      
      <div class="col-lg-7">
        <div class="about-descr">
          <p class="h1">I'm Rhea Mae Naga and I'm the Front-End Developer in our group</p>
          <p class="separator my-3">I'm 19th years old and I'm deeply passionate about what im doing , and I thrive on the endless possibilities they offer. From the moment
             I enter this society in a technology  , I knew I had found my true calling. Whether it's crafting elegant algorithms, designing intuitive user interfaces, or exploring the latest innovations, I'm always excited to embark on a new challenges . \
             My journey in the world of technology has been a constant quest for knowledge and innovation. With a keen eye for detail and a determination to push boundaries, I relish the challenge of turning complex problems into elegant solutions. Through my work,
              I aim to not only make a mark in the ever-evolving tech landscape but also to inspire and empower others to embrace the transformative power of technology. Join me on this exciting journey as we explore the limitless possibilities of the digital world together!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="contact" class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">GET IN TOUCH</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="wrapper">
          <div class="row no-gutters">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                <h3 class="mb-4">Write us</h3>
                <div id="form-message-warning" class="mb-4"></div> 
                <div id="form-message-success" class="mb-4">
                  Your message was sent, thank you!
                </div>
                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-12"> 
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                <h3>Contact information</h3>
                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text pl-3 dbox-p">
                    <p><span>Address:</span> Bagong Silang, Caloocan City</p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Phone:</span> <a href="tel://9152672363">+639152672363</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Email:</span> <a href="nagarheamae05@gmail.com">nagarheamae05@gmail.com</a></p>
                  </div>
                

            
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div id="footer" class="text-center">
  <div class="container">
    <div class="socials-media text-center">

      <ul class="list-unstyled">
        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
      
      </ul>

    </div>

    <p>&copy; Copyrights 2023. All rights reserved.</p>

  </div>
</div>

</body>
</html>
