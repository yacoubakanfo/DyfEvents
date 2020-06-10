<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/masque.jpg">

  <title>Liste des evenements</title>

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

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Mon <span class="lite">Dashboard</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Rechercher" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="assets/img/avatar.png">
                            </span>
                            <span class="username"><?= $_SESSION['nom'] ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="index.php?action=deconnecter"><i class="icon_key_alt"></i> Déconnexion</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Tableau de bord</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Enregistrer</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=enregistrer">Formulaire</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Evenements</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=lister">liste des evenements</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Liste des evenements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
              <li><i class="fa fa-table"></i>Evenements</li>
              <li><i class="fa fa-th-list"></i>liste</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Liste des evenements
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="icon_mobile"></i> Nom</th>
                    <th><i class="icon_mobile"></i> Description</th>
                    <th><i class="icon_calendar"></i> Date de début</th>
                    <th><i class="icon_calendar"></i> Date de fin</th>
                    <th><i class="icon_profile"></i> Organisateur</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php                
                    foreach($manager as $key => $value) 
                    {
                    ?>
                  <tr>
                    <td><?=$value->getName()?></td>
                    <td><?=$value->getDescription()?></td>
                    <td><?=$value->getDateBegin()?></td>
                    <td><?=$value->getDateEnd()?></td>
                    <td><?=$value->getPlanner()?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="index.php?action=enregistrer"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="index.php?action=modifier" title="Mettre à jour"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="?action=lister&supprimer=<?php echo $value->getId();?>" title="Supprimer"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php
                    }
                    ?> 
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
 </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="assets/js/scripts.js"></script>


</body>

</html>
