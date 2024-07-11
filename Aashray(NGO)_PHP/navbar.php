<?php session_start( ); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="modal.css">
 <!-- Navbar -->
 <div id="navv">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-sticky-top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#Who_we_are" data-bs-target="dropdown">Who We Are?</a>
              <ul class="dropdown-menu">
                <li><a href="index.php#Who_we_are" class="dropdown-item">About Us</a></li>
                <li><a href="mission&vision.php" class="dropdown-item">Mission & Vision</a></li>
              </ul>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link" href="getInTouch.php">Get In Touch</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.php" data-bs-toggle="dropdown">Start A Chapter</a>
              <ul class="dropdown-menu">
                <li><a href="asAVolunteer.php" class="dropdown-item">As A Volunteer</a></li>
              </ul>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
                  <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                  <button class="btn btn-info" data-toggle="modal" data-target="#loginModal" style="margin-top: 13px;"><span class="glyphicon glyphicon-user"></span>Admin Login</button>
           </ul>
        </div>
      </div>
    </nav>
  </div>

    <!-- Modal Admin Login -->
     
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="adminLogin.php" method="post"> 
          <div class="form-group">
            <label for="emailInput" class="text-muted">Email address</label>
            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email" pattern="[^ @]*@[^ @]*" required="required" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="passwordInput" class="text-muted">Password</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" name="password">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="adminLogin">Admin Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>