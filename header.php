<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta name="description" content="IFY">
  <meta name="author" content="Collin Kinchen &amp; Asa Staven">
  <meta name="keywords" content="HTML,CSS,Web,Development,PHP,ingredients,ct310,fresh">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./style.css" type="text/css" />
  <title>Ingredients For You</title>
</head>

<!-- Start of page Body -->
<body >

  <!-- Use the jumbotron for creating the header for the webpage -->
  <div class="jumbotron text-center">
    <h1>Ingredients For You Title</h1>
  </div>

  <!-- Create the collapsing navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="about.php">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingredient 1</a></li>
              <li><a href="#">Ingredient 2</a></li>
              <li><a href="#">Ingredient 3</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="authentication.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Add common title/logo/navbar -->
