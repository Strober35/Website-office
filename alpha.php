<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | Wisley A. Sousa</title>
  <link href="./scss/all.css" rel='stylesheet'>
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body onload="afficherMessagesBienvenue()">
  <header class="header">
  <div class="navbar">
            <div class="logo"><a class="logo" href="#">STROBER373</a></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="action-btn">Get Started</a>
            <div class="toggle-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        
        <div class="dropdown-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="action-btn">Get Started</a></li>
        </div>
  </header>

  <section class="home" id="home">
    <h2 class="span">Bienvenue !</h2>
    <div id="message-container-1" class="message"></div>
    <div class="portfolio-container">
      <div class="portfolio-box img">
        <a href="#"><img src="img/7.jpg" alt="Mon image"></a>
      </div>
      <div class="portfolio-box img">
        <a href="#"><img src="img/8.jpg" alt="Mon image"></a>
      </div>
    </div>
  </section>

  <!-- About section design -->

  <section class="about" id="about">
    <div class="about-img">
      <img src="img/about-me-pic2.png" alt="Imagem de Perfil">
    </div>
    <div class="about-content">
      <h2 class="heading">Qui Sommes Nous</h2>
      <h3>Frontend Developer!</h3>
      <p>Nous somme des Eutudiants!</p>
      <a href="#" class="btn">Read More</a>

    </div>
  </section>

  <!-- services section design -->

  <section class="services" id="services">
    <h2 class="heading">Divers</span></h2>
    <div class="services-container">

      <div class="services-box">
        <i class='bx bx-code-alt'></i>
        <h3>Informatique</h3>
        <p>Vous trouverez ici des exercices corrigés et des astuces bien coquins.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="services-box">
        <i class='bx bx-paint'></i>
        <h3>Students</h3>
        <p>Vous trouverez ici des documents utilisés au cours de l'année scolaire à l'INP-HB et à l'ESATIC.</p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="services-box">
        <i class='bx bx-bar-chart-alt'></i>
        <h3>Maketing</h3>
        <p>Des logiciels proposés.</p>
        <a href="#" class="btn">Read More</a>
      </div>
      <div class="services-box">
        <i class='bx bx-bar-chart-alt'></i>
        <h3>Maketing</h3>
        <p>Des logiciels proposés.</p>
        <a href="#" class="btn">Read More</a>
      </div>

    </div>
  </section>

  <!-- portfolio section design -->

  <section class="portfolio" id="portfolio">
    <h2 class="heading">Vidéo</span></h2>

    <div class="portfolio-container">
      <div id="video-player" class="portfolio-box">
        <video src="vid/1.mp4" controls></video>
      </div>
      <div id="video-player" class="portfolio-box">
        <video src="vid/2.mp4" controls></video>
      </div>
      <div id="video-player" class="portfolio-box">
        <video src="vid/3.mp4" controls></video>
      </div>
      <div id="video-player" class="portfolio-box">
        <video src="vid/4.mp4" controls></video>
      </div>
      <div id="video-player" class="portfolio-box">
        <video src="vid/5.mp4" controls></video>
      </div>
      <div id="video-player" class="portfolio-box">
        <video src="vid/6.mp4" controls></video>
      </div>

    </div>
  </section>

  <!-- contact section design -->

  <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <div class="tem">
      <div>
        <h2>Telegram</h2>
        <h5>+255 0564595580</h5>
      </div>
      <div>
        <h2>Whatsapp</h2>
        <h5>+255 0564595580</h5>
      </div>
      <div>
        <h2>Gmail</h2>
        <h5>kroukevin01@gmail.com</h5>
      </div>
    </div>

  </section>

  <!-- footer design -->

  <footer class="footer">
    <div class="footer-text">
      <p>Copyright &copy; 2023 by Wisley A. Sousa | All Rights Reserved.</p>
    </div>
    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>
  
  <!-- custo, js -->
  <script src="./js/script.js"></script>
</body>

</html>