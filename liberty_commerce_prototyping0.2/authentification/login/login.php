<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../layout/style4.css">
    <title>Connexion</title>
  </head>
  <body>
    <?php include '../../layout/header.php';?>
    <section class="login-container">
      <div>  
        <form action="" method="post">
          <span class="title_form">CONNEXION</span>
          <input type="e-mail" name="email" placeholder="E-mail d'utilisateur" required="required"/>
          <input type="password" name="password" placeholder="Mot de passe" required="required"/>
          <p><a href src="/liberty_commerce_prototyping0.2/liberty_commerce_prototyping/authentification/reset/reset.php"><span class="mdp_oublie">Mot de passe oublié?</span></a></p>
          <button type="submit">Continuer</button>
        </form>
      </div>
    </section>
    <?php include '../../layout/footer.php';?>
    </body>
    </html>
