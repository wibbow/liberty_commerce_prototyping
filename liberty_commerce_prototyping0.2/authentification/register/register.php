<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../../layout/style4.css">
    <title>Info</title>
    <script>
      var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

      function validatePassword(){
          if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Le mot de passe ne correspond pas");
          }   else {
              confirm_password.setCustomValidity('');
          }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
  </head>
  <body>
<?php include '../../layout/header.php'; ?>    
  <section class="register-container">
    <div>
      <header>
        <h2>Information d'utilisateur</h2>
      </header>
      <form action="" method="post">
        <input type="e-mail" name="email" placeholder="E-mail d'utilisateur" required="required"/>
        <form onSubmit="return validate();" "">
          <input type="password" id="password" name="password" placeholder="Mot de passe" required/>
          <input type="password" id="confirm_password" name="password_check" placeholder="Confirmez votre mot de passe" required/>
          <input type="text" name="name" placeholder="Nom" required/>
          <input type="text" name="firstname" placeholder="Prénom" required/>
          <input type="date" name="birthdate" placeholder="Date de naissance" required/>
          <button type="submit" value="submit">Continuer</button>
        </form>
    </div>     
  </section>
  <?php include '../../layout/footer.php'; ?>

  </body>
</html>
