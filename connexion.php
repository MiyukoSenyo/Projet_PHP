<?php

include "class/webpage.class.php";

$html = <<<HTML
<div class="main">
  <!-- Sign up form -->
  <section class="signup">
      <div class="container">
          <div class="signup-content">
              <div class="signup-form">
                  <h2 class="form-title">S'inscrire</h2>
                  <form method="POST" class="register-form" id="register-form" action="inscription.php">
                      <div class="form-group">
                          <label for="pseudo"><i class="zmdi zmdi-account material-icons-name"></i></label>
                          <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required/>
                      </div>
                      <div class="form-group">
                          <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                          <input type="text" name="nom" id="nom" placeholder="Nom" required/>
                      </div>
                      <div class="form-group">
                          <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                          <input type="text" name="prenom" id="prenom" placeholder="Prénom" required/>
                      </div>
                      <div class="form-group">
                          <label for="email"><i class="zmdi zmdi-email"></i></label>
                          <input type="email" name="email" id="email" placeholder="Email" required/>
                      </div>
                      <div class="form-group">
                          <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                          <input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
                      </div>
                      <div class="form-group form-button">
                          <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>
                      </div>
                  </form>
              </div>
              <div class="signin-form">
                  <h2 class="form-title">Se connecter</h2>
                  <form method="POST" class="register-form" id="login-form" action="verif_user.php">
                      <div class="form-group">
                          <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                          <input type="email" name="your_email" id="your_email" placeholder="Email" required/>
                      </div>
                      <div class="form-group">
                          <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                          <input type="password" name="your_pass" id="your_pass" placeholder="Mot de passe" required/>
                      </div>
                      <div class="form-group form-button">
                          <input type="submit" name="signin" id="signin" class="form-submit" value="Se connecter"/>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
</div>
HTML;

$page = new WebPage("Mes personnages");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("css/connexion.css");
$page->appendCssUrl("fonts/material-icon/css/material-design-iconic-font.min.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();