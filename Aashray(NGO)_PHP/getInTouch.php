<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get In Touch- Aashray</title>
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

<?php
include("navbar.php");
?>

<div class="getInTouch">
        <div class="container">
            <h1>Get In Touch</h1>
            <?php
            
            if(isset($_POST['name']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $contact=$_POST['contact'];
                $message=$_POST['message'];

                include("config.php");
                $record=$conn->prepare("
                INSERT INTO `getintouch` (`Id`, `Name`, `Email`, `Contact_Number`, `Message`) VALUES (NULL, '$name', '$email', '$contact', '$message')
                ");
                $result=$record->execute( );
                if($result)
                {
                    echo "Submitted!!";
                }
                else
                {
                    echo "Error!!";
                }
            }

            ?>

            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" minlength="3" required>
                    </div>
                  </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern="[^ @]*@[^ @]*" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="contact">Contact Number:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact" pattern="[789][0-9]{9}" maxlength="10" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="message">Message:</label>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="5" id="message" placeholder="Message" name="message" minlength="20" required></textarea>
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
      </div>

      <?php
        include("footer.php");
      ?>

</body>
</html>