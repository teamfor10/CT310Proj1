
<!-- Include header -->
<?php include 'header.php';?>
<!-- Use the jumbotron for creating the header for the webpage -->
<div class="jumbotron text-center">
  <h1>Site title</h1>
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
      <a class="navbar-brand" href="#">Page 1</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- create three coulumn with lg and md size  -->
<div class="container-fluid" id="content">
  <div class="row visible-on">

    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
      <div class="list-group">
        <a href="#" class="list-group-item">1</a>
        <a href="#" class="list-group-item">2</a>
        <a href="#" class="list-group-item">3</a>
      </div>
    </div>

<!-- Add Main Content here -->
    <div class="col-xs-6 col-sm-9 col-md-6 col-lg-4">

    </div>

<!-- Add Image here -->
    <div class="hidden-xs hidden-sm col-md-3 col-lg-4">
    </div>

  </div>
</div>
<?php include 'footer.php';?>

