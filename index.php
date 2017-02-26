<!-- Include header -->
<?php include 'header.php'; ?>

<!-- create three coulumn with lg and md size  -->
<div class="container-fluid" id="content">
  <div id="home-message">
    <h2>Welcoming message here</h2>
    <p>This is the site. blah, blah, blah<br />
      More Inventory coming soon!</p>
  </div>
  <!-- <div class="row visible-on"> -->

    <!-- <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
      <div class="list-group">
        <a href="#" class="list-group-item">1</a>
        <a href="#" class="list-group-item">2</a>
        <a href="#" class="list-group-item">3</a>
      </div>
    </div> -->

<!-- Add Main Content here -->
<!-- class="col-xs-6 col-sm-9 col-md-6 col-lg-4" -->
    <div >
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <!-- Ingredient 1 slide -->
          <div class="item active">
            <a style="display:block" href="#">
              <img src="./images/maplesugar.jpg" alt="igdt 1" width="250" height="auto">
            </a>
            <div class="carousel-caption">
              <h3>Maple Sugar</h3>
              <p>Some short description - $5.99</p>
            </div>
          </div>

          <!-- Ingredient 2 slide -->
          <div class="item">
            <a style="display:block" href="#">
              <img src="./images/nori.jpg" alt="igdt 2" width="250" height="auto">
            </a>
            <div class="carousel-caption">
              <h3>Nori</h3>
              <p>Some short description - $2.99</p>
            </div>
          </div>
          <!-- Ingredient 3 slide -->
          <div class="item">
            <a style="display:block" href="#">
              <img src="./images/sesameseed.jpg" alt="igdt 3" width="250" height="auto">
            </a>
            <div class="carousel-caption">
              <h3>Sesame Seed</h3>
              <p>Some short description - $3.99</p>
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

<!-- Add Image here -->
    <!-- <div class="hidden-xs hidden-sm col-md-3 col-lg-4">
      <img src="./images/pic.jpg" height="100" width="auto">
    </div> -->

  <!-- </div> -->
</div>
<?php include 'footer.php'; ?>
