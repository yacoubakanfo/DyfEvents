<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/masque.jpg">

  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet" />  
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="index.php?action=login" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button class="btn btn-lg btn-block btn1" type="submit" name="submit">Se connecter</button>
        <button class="btn btn-lg btn-block btn2"><a href="index.php?action=inscription">Créer un compte</a></button>
      </div>
    </form>
    <h4><center><a href="index.php" class="returnhome"><img src="assets/img/arrowleft.png">Retour vers DyfEvents</a><center></h4>
  </div>

</body>

</html>
