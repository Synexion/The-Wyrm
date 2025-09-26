<?php
  include($_SERVER['DOCUMENT_ROOT'].'/_blocks/nav.php');
  include($_SERVER['DOCUMENT_ROOT'].'/_blocks/log.php');
?>

<body>
  <div class="pos">
    <div class="form_group">
      <div class="contact">
        <div class="contact_title">
          <h1>Formulaire de contact</h1>
          <small>Écrivez votre message</small>
        </div>
      </div>
      <div class="form_contact">
        <div class="form">
          <form method="POST" class="flex_col">
            <div class="flex_row width_">
              <div class="flex_col width_">
                <label for="mail">Écrivez votre mail</label>
                <input type="mail" name="mail" placeholder="Votre mail" class="width" required>
              </div>
              <div class="flex_col width_">
                <label for="about">Indiquez l'objet de votre message</label>
                <input type="text" name="about" placeholder="Objet du message" class="width" required>
              </div>
            </div>
            <div class="flex_col">
              <label for="text_area">Écrivez votre message ici</label>
              <textarea name="texte_area" rows="20" placeholder="Votre message..."></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/_blocks/footer.php');
?>