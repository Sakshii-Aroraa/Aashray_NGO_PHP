<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Aashray</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="modal.css">
</head>
<body>

    <!-- Navbar & Modal -->
<?php
include("navbar.php");
?>

<div class="port_heading">
      <h1>Portfolio</h1>
    </div>
    <div class="portfolioo">
      <div class="row">
        <div class="portfolio_img">
        <div class="col-sm-3">
            <a href="images/img1.png" data-lightbox="myPortfolio"><img src="images/img1.png" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img2.png" data-lightbox="myPortfolio"><img src="images/img2.png" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img3.jpg" data-lightbox="myPortfolio"><img src="images/img3.jpg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img4.jpg" data-lightbox="myPortfolio"><img src="images/img4.jpg" alt=""></a>
        </div>
    </div>
      </div>
      <div class="row">
        <div class="center_img">
        <div class="col-sm-12">
          <a href="images/img12.png" data-lightbox="myPortfolio"><img src="images/img12.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="portfolio_img">
        <div class="col-sm-3">
          <a href="images/img5.jpg" data-lightbox="myPortfolio"><img src="images/img5.jpg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img6.jpg" data-lightbox="myPortfolio"><img src="images/img6.jpg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img7.jpg" data-lightbox="myPortfolio"><img src="images/img7.jpg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img8.jpg" data-lightbox="myPortfolio"><img src="images/img8.jpg" alt=""></a>
        </div>
    </div>
      </div>
      <div class="row">
        <div class="center_img">
        <div class="col-sm-12">
          <a href="images/img11.jpg" data-lightbox="myPortfolio"> <img src="images/img11.jpg" alt=""></a>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="portfolio_img">
        <div class="col-sm-3">
          <a href="images/img9.jpeg" data-lightbox="myPortfolio"><img src="images/img9.jpeg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img10.jpeg" data-lightbox="myPortfolio"><img src="images/img10.jpeg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img14.jpg" data-lightbox="myPortfolio"><img src="images/img14.jpg" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="images/img13.png" data-lightbox="myPortfolio"><img src="images/img13.png" alt=""></a>
        </div>
    </div>
      </div>
      <div class="row">
        <div class="center_img">
        <div class="col-sm-12">
          <a href="images/img15.jpg" data-lightbox="myPortfolio"><img src="images/img15.jpg" alt=""></a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/lightbox-plus-jquery.min.js"></script>

  <?php
    include("footer.php");
  ?>
    
</body>
</html>