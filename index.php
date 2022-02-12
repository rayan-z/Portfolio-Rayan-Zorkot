<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" type="text/css" href="./src/style.css"/>
  <script type="text/javascript" src="./src/javascript.js"></script>
  <title>Portfolio-Rayan Zorkot</title>
</head>

<body>
  <header>
    <a href="#" class="logo">Portfolio</a>
    <div class="toggle" onclick="toggleMenu();"></div>
    <ul class="menu">
      <li><a href="#home" onclick="toggleMenu();">Accueil</a></li>
      <li><a href="#about" onclick="toggleMenu();">A propos de moi</a></li>
      <li><a href="#competences" onclick="toggleMenu();">Compétences</a></li>
      <li><a href="#portfolio" onclick="toggleMenu();">Portfolio</a></li>
      <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>

    </ul>
  </header>
  <section class="banner" id="home">
    <div class="textBanner">
      <h2>Bonjour , je suis<br><span>Rayan Zorkot.</span></h2>
      <h3>Je suis Etudiant en informatique a Sophia Ynov Campus.</h3>
      <a href="CV Rayan Zorkot.pdf" class="btn">Mon CV</a>
    </div>
  </section>
  <section class="about" id="about">
    <div class="heading">
      <h2>A Propos de Moi</h2>
    </div>
    <div class="content">
      <div class="contentBx imBout">
        <h3>Je suis Etudiant en informatique a Sophia Ynov Campus.</h3>
        <p>Je suis une personne
          ouverte d’esprit, curieuse et agréable
          avec les autres. D’un naturel jovial et
          social je suis prêt à m’investir activement
          avec beaucoup de professionnalisme
          dans le suivi et les relations avec des
          clients potentiels.<br>
          Etant issu d’un lycée international
          français, j’ai une très bonne connaissance
          de la langue anglaise et une bonne
          connaissance de la langue espagnole.
          Enfin de par mes études et des acquis
          que je possède, je suis en mesure de
          réaliser une multitude de projets en
          informatique liée à mon parcours étudiant.
          <br>
        </p>
      </div>
      <div class="imBout">
        <img src="./img/img1.jpg" class="img">
      </div>
    </div>
  </section>
  <section class="competences" id="competences">
    <div class="heading white">
      <h2>Mes Compétences</h2>
      <p>Voici ci-contre les compétences que j'ai pu acquérir durant mes deux dernières années :</p>
    </div>
    <div class="skill-bars">
      <div class="bar">
        <div class="info">
          <span>HTML</span>
        </div>
        <div class="progress-line html">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>CSS</span>
        </div>
        <div class="progress-line css">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>JavaScript</span>
        </div>
        <div class="progress-line javascript">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>Php</span>
        </div>
        <div class="progress-line php">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>C</span>
        </div>
        <div class="progress-line c">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>C#</span>
        </div>
        <div class="progress-line cs">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>JAVA</span>
        </div>
        <div class="progress-line java">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>Réseaux</span>
        </div>
        <div class="progress-line reseaux">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>SQL</span>
        </div>
        <div class="progress-line sql">
          <span></span>
        </div>
      </div>
      <div class="bar">
        <div class="info">
          <span>Linux</span>
        </div>
        <div class="progress-line linux">
          <span></span>
        </div>
      </div>
    </div>

  </section>
  <section class="Portfolio" id="portfolio">
    <div class="heading">
      <h2>Mon Portfolio :</h2>
      <p>Voici mes différents travaux :</p>
    </div>
    <div class="contenue">
      <div class="PortfolioBx">
        <a href="#">
          <img src="./img/icon1.png">
        </a>
        <h2>Portfolio</h2>
        <p>Réalisation de mon Portfolio qui a été mon projet de première année.</p>
      </div>
      <div class="PortfolioBx">
        <a href="https://github.com/rayan-z/Labyrinthe-SDL">
          <img src="./img/icon3.png">
        </a>
        <h2>Labyrinthe/SDL</h2>
        <p>Ci-contre la réalisation de mon projet de première année en C.</p>
      </div>
      <div class="PortfolioBx">
        <a href="https://github.com/rayan-z/Tetris/tree/main/Tetris-C%23">
          <img src="./img/icon2.png">
        </a>
        <h2>Tetris-Game</h2>
        <p>Réalisation de mon projet de deuxième année en C#</p>
      </div>
      <div class="PortfolioBx">
        <a href="https://github.com/rayan-z/TP-Java---Urban-Marginal-">
          <img src="./img/icon4.png">
        </a>
        <h2>The Forest Marginal- JAVA</h2>
        <p>Réalisation de mon projet de fin de module en Java, qui est en question un jeu client serveur.</p>
      </div>
      <div class="PortfolioBx">
        <a href="https://github.com/rayan-z/Cairo-Pacman/tree/main/gtkpacman/cairo_pacman">
          <img src="./img/icon5.png">
        </a>
        <h2>Cairo Pacman</h2>
        <p>Voici un projet de première année que j'ai pu réaliser en C , le but étant de faire un pacman avec la bibliothèque cairo.</p>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="heading white">
      <h2>Contact : </h2>
    </div>
    <div class="content">
      <div class="contactInfo">
        <h3>Contact Info</h3>
        <div class="contactInfoBx">
          <div class="box">
            <div class="icon"></div>
            <div class="text">
              <h3>Téléphone :</h3>
              <p>07-49-34-17-19</p>
            </div>
          </div>
          <div class="box">
            <div class="icon"></div>
            <div class="text">
              <h3>Email : </h3>
              <p>Ozorkot841@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="formBx">
        <form>
          <h3>Send me a Message</h3>
          <input type="text" name="nom" placeholder="Full Name" required autocomplete="off">
          <input type="email" name="email" placeholder="Email" required autocomplete="off">
          <textarea placeholder="Your Message" name="message" required></textarea>
          <?php include('./mail.php'); ?>
          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </section>
  <div class="copyright">
    <p>Copyright 2022 Rayan Zorkot. All Right Reserved,</p>
  </div>
</body>

</html>
