</nav>
  <!-- formulaire d'inscription en overlay -->
  <div class="login hidden" id="overlay_log">
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
              <a href="#" id="log_choice">Vous n'êtes pas inscrit ? Cliquez ici</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe hidden" id="overlay_sub">
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
            <a href="#" id="sub_choice">Déjà inscrit ? Cliquez ici</a>
          </div>
        </div>
      </div>
    </div>
  </div>