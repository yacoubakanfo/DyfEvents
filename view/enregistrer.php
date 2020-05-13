<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/img/favicon.png">

  <title>Formulaire d'enregistremment</title>

  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../asset/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet" />
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
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
        </div>
        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuem>
       </div>
    </header> 
    <!--header end-->
     <!--sidebar start-->
     <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="index.html">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_document_alt"></i>
                            <span>Enregistrer</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
                <li><a class="" href="form_component.html">Formulaire</a></li>
                <!-- <li><a class="" href="form_validation.html">Form Validation</a></li> -->
              </ul>
            </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                              <i class="icon_table"></i>
                              <span>Evenements</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                <ul class="sub">
                  <li><a class="" href="basic_table.html">Evenement annuel</a></li>
                </ul>
              </li>
            </ul>
              <!-- sidebar menu end-->
            </div>
        </div>
    </aside>
    <!--sidebar end-->
     <!--main content start-->
     <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-files-o"></i>ENREGISTRER UN EVENEMENT</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Accueill</a></li>
                <li><i class="icon_document_alt"></i>Formulaire</li>
                <li><i class="fa fa-files-o"></i>Enregistrer un evenement</li>
              </ol>
            </div>
        </div>
         <!-- Form validations -->
         <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                Enregistrer un evenement
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="../controleurs/register.php">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Nom <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="cname" name="name" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="" class="control-label col-lg-2">Date de debut <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cannee" type="date" name="dateBegin" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="" class="control-label col-lg-2">Date de fin</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cannee" type="date" name="dateEnd" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="" class="control-label col-lg-2">Organisateur<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="corganisateur" type="text" name="planner" />
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cdescription" type="text" name="description" />
                    </div>
                  </div> 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="submit">Enregistrer</button>
                      <button class="btn btn-default" type="button">Annuler</button>
                    </div>
                  </div>
                </form>
              </div>
          </section>
        </div>
      </div>
<!-- javascripts -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery validate js -->
<script type="text/javascript" src="../style/js/jquery.validate.min.js"></script>

<!-- custom form validation script for this page-->
<script src="../assets/js/form-validation-script.js"></script>
<!--custome script for all page-->
<script src="../assets/js/scripts.js"></script>
</body>
</html>

                  