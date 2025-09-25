<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bienvenue au sein de la confrérie des protecteurs ! Rejoignez la bataille pour sauver Yehenor !">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
  <title>The Wyrm</title>
</head>
<body>
  <nav class="nav_bar">
    <a href="index.php">Accueil</a>
    <a href="#">Jouer maintenant !</a>
    <a href="#">Actualités</a>
    <a href="#">Forum</a>
    <a href="#">Contact</a>
    <a href="#" id="reg_sub_form">S'inscrire / Se connecter</a>
  </nav>
  <!-- formulaire d'inscription en overlay -->
  <div class="login">
    <div class="login_box">
      <div class="login_form">
        <div class="login_register">
          <div class="login_title">
            <h3>Se connecter</h3>
          </div>
          <form method="POST" name="log_form">
            <label for="mail">E Mail</label>
            <input type="text" placeholder="Entrez votre adresse mail" name="mail" required>
            <label for="pwd">Mot de passe</label>
            <input type="password" placeholder="Entrez votre mot de passe" name="pwd" required>
            <input type="submit" value="Se connecter" id="valider">
            <div class="link_sub">
              <a href="#">Vous n'êtes pas inscrit ? Cliquez ici</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe">
    <div class="sub_box">
      <div class="sub_register">
        <div class="sub_title">
          <h3>S'inscrire</h3>
        </div>
        <div class="sub_form">
          <form method="POST" name="sub_form">
            <label for="pseudo">Votre pseudo</label>
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <label for="mail">Entrez votre e-mail</label>
            <input type="text" name="mail" placeholder="E-mail" required>
            <label for="pwd">Entrez un mot de passe</label>
            <small>8 caractères, 1 majuscule et un caractère spécial minimum</small>
            <input type="password" name="pwd" placeholder="Mot de passe" required>
            <label for="pwd_confirm">Confirmez votre mot de passe</label>
            <input type="password" name="pwd_confirm" placeholder="Confirmez votre mot de passe" required>
            <input type="submit" value="S'enregistrer" id="valider">
          </form>
          <div class="link_log">
            <a href="#">Déjà inscrit ? Cliquez ici</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header_content">
    <div class="header_shadow"></div>
    <div class="header_text">
      <h1>The Wyrm</h1>
      <p>Rejoignez les rangs. La défaite ne sera pas permise.</p>
      <div class="header_cta">
        <a href="#">jouer maintenant</a>
      </div>
    </div>
  </header>
  <main class="main_content">
    <div class="main_nav">
      <div class="quete">
        <a href="#"><h3>Sauvez notre monde</h3></a>
      </div>
      <div class="hero">
        <a href="#"><h3>Définissez qui vous êtes</h3></a>
      </div>
      <div class="exploration">
        <a href="#"><h3>Découvrez un monde magique</h3></a>
      </div>
    </div>
    <div class="main_presentation">
      <div class="main_img">
        <img src="./assets/main_img.jpg" alt="chevalier combattant des ennemies">
      </div>
      <div class="main_text">
        <div class="main_text">
          <p>Bienvenue dans The Wyrm.</p>
          <p>Arpenter un monde créer par un unique développeur passionné des mondes d'héroïque fantaisie.</p>
          <p>Ce jeu à pour but de me perfectionner dans le domaine du développement. Aussi bien vers le développement web par le biais de ce site internet et du développement du jeu vidéo The Wyrm.</p>
          <p>Ce site me servira de Portfolio, dans l'objectif de trouver une alternance afin de parfaire mes aptitudes dans ces domaines.</p>
          <p>Tout retour constructif est évidemment bienvenue. Vous pouvez les transmettres grâce au formulaire de contact situé dans la vue contact, qui est accescible par la barre de navigation ou le footer.</p>
          <p>*Toutes images/photos utilisé sont libre de droit ou généré par IA*</p>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer_content">
      <div class="footer_logo">
        <a href="index.php">
          <img src="./assets/logo-ssf.png" alt="logo the wyrm sans fond">
        </a>
      </div>
      <div class="footer_links">
        <div class="footer_link">
          <div class="footer_link_title">
            <h2>Liens</h2>
          </div>
          <div class="links">
            <div class="hover">
              <a href="index.php">Accueil</a>
            </div>
            <div class="hover">
              <a href="#">Jouer maintenant !</a>
            </div>
            <div class="hover">
              <a href="#">Actualités</a>
            </div>
            <div class="hover">
              <a href="#">Forum</a>
            </div>
            <div class="hover">
              <a href="#">Contact</a>
            </div>
            <div class="hover">
              <a href="#">S'inscrire / Se connecter</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_reseau">
        <h2>Réseaux</h2>
        <div class="github">
          <img src="./assets/logo_github.jpg" alt="logo github">
          <a href="https://github.com/Synexion" target="_blank">Git Hub</a>
        </div>
        <div class="linkedin">
          <img src="./assets/logo_linkedin.png" alt="logo github">
          <a href="https://www.linkedin.com/in/lilian-casagrande/" target="_blank">LinkedIn</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="./js/js.js"></script>
</body>
</html>