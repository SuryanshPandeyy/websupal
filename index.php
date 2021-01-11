<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="swiper.min.css" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://stackpath.bootstcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

</head>

<body class="body">
  <section class="section">
  </section>

  <div class="menu">
    <svg class="dd_icon" width="2em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M14 2H2a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zM2 1a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2H2z" clip-rule="evenodd" />
      <path class="dd_path" d="M3 4a1 1 0 011-1h2a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
    </svg>


    <div id="submenu">
      <a href="">About Us</a>
      <a href="">Types of Websites</a>
      <a href="#">Other Services</a>
      <a href="">Contact Us</a>

    </div>
  </div>
  <div>
    <?php
    if (isset($_SESSION['id'])) {
      echo "<a><form method='POST'  action='" . userLogout($mysqli) . "'>
       <input class='logout' type='submit' value='Logout' name='logoutSubmit'/>
  </form></a>";
    }

    ?>
    <?php
    if (!isset($_SESSION['id'])) {
      echo "<div class='logout'><form method='POST'  action='" . userLogout($mysqli) . "'>
       <button type='submit' class='logout1' value='Login' name='logoutSubmit'>Login</button>
  </form>";
      echo "<form method='POST' action='register.php'>
  <button class='logout1' type='submit'>Register</button>
  </form></div>";
    }
    function userLogout($mysqli)
    {
      if (isset($_POST['logoutSubmit'])) {
        session_start();
        session_destroy();
        header('Location:login.php');
        exit();
      }
    }
    ?>
  </div>
  <!--Menu Closed-->
  <div class="earth"></div>


  <!--Images opened-->
  <div class="icon_images">
    <div class="icon_text1"><img class='icon_img1' src='download.png' alt='image1' /></img>
      <div class="icon_txt">
        <p></p>
      </div>
    </div>
    <div class="icon_text2"><img class='icon_img2' src='download.png' alt='image2' /></img>
      <div class="icon_txt">
        <p></p>
      </div>
    </div>
  </div>
  <!--Images closed-->

  <!--body open-->

  <!--list_open-->
  <p class="types_of_web">Types of Websites we Build</p>

  <div class="body_card">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Static</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Dynamic</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Blog</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Eccomerce</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Image Editing</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cards">
            <div class="SliderText">
              <img class="SliderImg" src="icon_head.png" />
            </div>
            <div class="card_content">
              <h3>Logo Making</h3>
              <p>Websites</p>
              <a href="#">Go</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--list-closed-->

  <!--body close-->

  <!--chat open-->

  <!-- footer start -->
    <footer class="footer">
      To work with us , tell more about your project in the contact form below.
    </footer>
  <!-- footer end-->

  <script src="function.js"></script>
  <script src="swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: -100,
        depth: 2000,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>

</html>
