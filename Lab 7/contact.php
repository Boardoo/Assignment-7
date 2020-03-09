<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include{'include.header.php'}; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Bellingham Hotel</title>

  </head>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png"">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png"">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png"">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png"">
  <link rel="apple-touch-icon" sizes="114x114" href="avicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="avicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png"">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon"  type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-  color" content="#ffffff">
  <body>
    <div id="loadingDiv">
      <div class="loader spinner">
        
      </div>
    </div>
    <header>
      <div id="Container"></div>
      <div id="logo"></div>

      <nav>
        <label for="label" class="label"><i class="fas fa-bars"></i></label>
        <input type="text" id="toggle">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <div id="banner">
        <div class="bellinghamhotel"></div>
        <div class="heroimage"></div>
        <div class="clearfix"></div>
      </div>
    </header>

    <main>
      <section class="main-padding"></section>
      <div class="container">
        <div class="sideleft">
         <h2 class="heading">Contact Form</h2> 
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, doloremque rerum? Voluptatum sequi inventore doloremque neque aspernatur aperiam velit labore.</p>
         <p><img src="/images/img_1.jpg" alt="Read More Images" width="100%"></p>
        </div>

        <div class="sideright">
          <form action="hotel.html" method="POST" class="contactform" autocomplete="on">
            <p>Name</p><label for="Name"><textarea name="Name" id="Name" cols="30" rows="1"></textarea></label>
            <p>Phone</p><label for="Phone"><textarea name="phone" id="phone" cols="30" rows="1"></textarea></label>
            <p>Email</p><label for="Email"><textarea name="Email" id="Email" cols="30" rows="1"></textarea></label>
            <p>Write Message</p><label for="Write Message"><textarea name="Write Message" id="" cols="30" rows="5"></textarea></label>
            <br>
            <input type="button" class="button" value="Send Message">
          </form>
        </div>
        <div class="clearfix"></div>
        <section class="main-padding" class="bg-color">
          <div class="container">
          </div>
          <div class="container">
              <h1>Subscribe to Our Newsletter</h1>
              <form>
                  <input type="email" placeholder="Enter Email...">
                  <button type="submit" class="button">Subscribe</button>
              </form>
          </div>
          <footer class="main-footer">
            <div class="container">
              <div class footer>
                  <h4 class="sub-heading">
                    <p>24/7 Call us</p>
                    <a href="+ 1 306 209 18823"></a>
                  </h4>
              </div>
              <div class="footer">
                <h4 class="sub-heading">
                  <h4>CONNECT WITH US</h4>
                  <p>We are socialized. Follus us.</p>
                </h4>
              </div>
              <div class="footer">
                <h4 class="sub-heading">
                  CONNECT WITH US
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                </p>
              </div>
              <div class="copyright">
                Copyright 2019 All rights reserved | Brody Gill
              </div>
            </div>
              </footer>
        </div>
        </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<script src="../Lab4/js/main.js"></script>