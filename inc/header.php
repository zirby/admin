<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CD2016-Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-3.3.2.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css">
    <link rel="stylesheet" href="css/bootstrap-multiselect.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">
    <!--  navigation  -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CD 2016 - Administration</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Réservations</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blocs <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="blocs.php?jour=ven">Vendredi</a></li>
                  <li><a href="blocs.php?jour=sam">Samedi</a></li>
                  <li><a href="blocs.php?jour=dim">Dimanche</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Places <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="ven04.php">Vendredi</a></li>
                  <li><a href="sam05.php">Samedi</a></li>
                  <li><a href="dim06.php">Dimanche</a></li>
                </ul>
            </li>
            <li><a href="users.php">Spectateurs</a></li>
            <li><a href="reserv.php">Nb.Réserv.</a></li>
          </ul>
        </div>
      </div>
    </nav>
