<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My account</title>

  <link rel="stylesheet" href="app/css/travelstyle.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">




</head>

<body>



  <header>
   <!-- Navbar -->
      <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark">
      <div class="container-fluid">
    <!-- Navbar brand -->
      <a class="navbar-brand me-3" href="home"><i class="fas fa-plane me-3"></i>Travel with me</a>
  

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"         data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"   aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <ul class="navbar-nav">

        <!-- Link -->
        <li class="nav-item">
           <li class="nav-item"><a class="nav-link" href="home" target="_blank">Home</a></li>
        </li>

         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Explore
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="exploretheworld">Places</a></li>
            <li><a class="dropdown-item" href="tropicaldestinations">Tropical destinations</a></li>
            <li><a class="dropdown-item" href="culture">Cultures</a></li>
          </ul>
        </li>

        <li class="nav-item">
        <li class="nav-item"><a class="nav-link" href="about" target="_blank">About</a></li>
        </li>
        <li class="nav-item">
        <li class="nav-item"><a class="nav-link" href="contact" target="_blank">Contact</a></li>
        </li>

      </ul>
      

          <!-- Log out button -->
         <a class=' btn btn-secondary mylogout ms-auto' role="button" href="logout">Log out</a>
      </div>
   </div>
  


  </header>



  <main>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="app/img/banner.jpg" class="d-block w-100" alt="banner">
          <div class="carousel-caption d-none d-md-block">
            <h2>Explore the world</h2>
            <p>“One's destination is never a place, but a new way of seeing things.” – Henry Miller.</p>

            <a class="btn btn-outline-light btn-lg" href="exploretheworld" role="button">Learn more</a>

          </div>
        </div>

        <div class="carousel-item">
          <img src="app/img/banner2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Culture</h2>
            <p>The beauty of the world lies in the diversity of its people.</p>

            <a class="btn btn-outline-light btn-lg"href="culture" role="button">Discover</a>

          </div>
        </div>

        <div class="carousel-item">
          <img src="app/img/banner3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Tropical destinations</h2>
            <p>Saafu Point Rd, Fuvahmulah, Maldives</p>

            <a class="btn btn-outline-light btn-lg" href="tropicaldestinations" role="button">Learn more</a>

          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="feaplaces pt-5">
      <h1>Featured stories</h1>
      <hr>
    </div>

    <section id="about" class="text-center text-white">

      <div class="row d-flex">
        <div class="col-md-6 mt-5">
          <h2>See the beauty of our world</h2>
          <div>
            <p class="ms-5">The best and most beautiful things in the world cannot be seen or   even touched - they mustbe felt with the heart. This is what holidays, travels, vacations are about. It is not really rest or even
              leisure we chase. We strain to renew our capacity to wonder, to shock ourselves into astonishment once again. <span class="showLess"> We travel, initially, to lose ourselves; and we travel, next to find ourselves. We travel to open
              our hearts and eyes and learn more about the world than our newspapers will accommodate. We travel to bring what little we can, in our ignorance and knowledge, to those parts of the globe whose riches aredifferently dispersed. And we travel, in essence, to become young fools again- to slow time down and get
              taken in, and fall in love once more.</span>
               <span class="toggle"> show more...</span></p>
          </div>
          <a class="btn btn-outline-light btn-lg" href="popular" target="_blank" role="button">Popular destinations</a>
        </div>
        <div class="col-md-6"><img src="app/img//cambodia.jpg" id="fitimg" alt="Cambodia"
            class="img-fluid shadow-2-strong mt-3 h-70"></div>
      </div>

    </section>

    <section id="about" class="text-center text-white">

      <div class="row d-flex">
        <div class="col-md-6 mt-5">
          <h2>Woman at the end of the land</h2>
          <div>
            <p class="ms-5">For centuries, the nomadic Nenets reindeer herders of the Siberian arctic have migrated across one of the most challenging environments on Earth. Today, the permafrost is melting, posing significant threat to their unique way of life. This is the intimate story of Lena, a young Nenets mother, and her journey to birth.<>
          </div>
          <a class="btn btn-outline-light btn-lg" href="nenet" target="_blank" role="button">Read</a>
        </div>
        <div class="col-md-6"><img src="app/img//nen1.jpg" id="fitimg" alt="Cambodia"
            class="img-fluid shadow-2-strong mt-3 h-70"></div>
      </div>

    </section>
    



    <section class="bgimage">
      <img src="app/img/bgimage.jpg" class="bgimg">
      <div class="wrapper">
        <h1>“Wherever you go becomes a part of you somehow”</h1>
      </div>
    </section>

  </main>




  <footer>
    <ul class="sci">
    <li><a href="https://www.facebook.com/" target="_blank"><img src="app/img/facebook.png" alt="Facebook"></a></li>
      <li><a href="https://www.instagram.com/" target="_blank"><img src="app/img/instagram.png" alt="Instagram"></a></li>
      <li><a href="https://twitter.com/" target="_blank"><img src="app/img/twitter.png" alt="Twitter"></a></li>
    </ul>
    <h4 class="copyrightText">Copyright ©2021 <a href="">Travel with me</a>. All rights reserved.</section</h4>

  </footer>






  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <script src="app/js/index.js"></script>
  <script src="app/jsignUp.js"></script>
</body>

</html>