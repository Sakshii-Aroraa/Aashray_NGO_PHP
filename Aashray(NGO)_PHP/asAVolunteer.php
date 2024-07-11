<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>As A Volunteer- Aashray</title>
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

<!-- Volunteer Heading -->
<div class="row">
            <div class="col-sm-12">
                <h1 class="volunteer_heading">Volunteer</h1>
            </div>
        </div>

        <!-- left Side -->
        <div class="row">
            <div class="col-sm-6">
                <div class="leftSideVolunteer">
                    <img src="images/groupPic.jpg" alt="">
                </div>
                <div class="volunteerOfAashray">
                    <div class="volunteerOfAashray_heading">
                        <h2>Volunteer Of Aashray: </h2>
                    </div>
                    <p>
                    Aashray, a leading NGO in India, offers numerous opportunities to those in need, supporting minorities, people facing poverty, and those seeking government scheme support. 
                        As a volunteer for Aashray, you can help make a difference in the lives of people and communities across India. 
                        By volunteering with Aashray, you can contribute your time and skills to a range of initiatives, including raising awareness of government schemes, 
                        assisting with applications, and providing essential aid. The foundation is committed to making a positive impact on society and welcomes individuals who share their vision to join their efforts. 
                        If you’re interested in volunteering for Aashray, visit their website or contact them directly for further information.
                    </p>
                </div>
                <div class="volunteerEligiblity">
                    <div class="volunteerEligiblity_heading">
                        <h2>
                            Eligibility criteria to Volunteer for Aashray :
                        </h2>
                    </div>
                    <p>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Person 18 years and above of age. <br>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Person with no criminal records. <br>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Person interested in social work. <br>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Aashray has the right to approve or reject volunteer applications at any time. <br>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Aashray has the right to approve or reject the Donation/donation application at any time. <br>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> No person will misuse the name of the Aashray for their false intentions, in case a person is found guilty, strict action will be taken against him. <br>
                    </p>
                </div>
            </div>
            
            <div class="col-sm-6">
              <div class="volunteerForm">
                <div class="volunteerHeading">
                  <h2>Volunteer's Application Form</h2>
                </div>
                </div>
                <?php
include("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zipCode = $_POST['zipCode'];
    $occupation = $_POST['occupation'];

    if (isset($_FILES['IDProof'])) {
        $IDProof = $_FILES['IDProof']['name'];
        $file_temp = $_FILES['IDProof']['tmp_name'];
        $file_size = $_FILES['IDProof']['size'];
        $location = "IDProof/" . $IDProof;

        if ($file_size < 5242880) {
            if (move_uploaded_file($file_temp, $location)) {
                $record = $conn->prepare("
                INSERT INTO `volunteersform` (`Id`, `Name`, `Age`, `Email`, `Contact`, `Address`, `City`, `State`, `Country`, `ZipCode`, `Occupation`, `IdProofName`) VALUES 
                (NULL, '$name', '$age', '$email', '$contact', '$address', '$city', '$state', '$country', '$zipCode', '$occupation', '$IDProof')
                ");
                $result = $record->execute();
                if ($result) {
                    echo "<center><h3 class='text-danger'>Submitted!!</h3></center>";
                } else {
                    echo "Error!!";
                }
            } else {
                echo "<center><h3 class='text-danger'>Failed to upload the file!</h3></center>";
            }
        } else {
            echo "<center><h3 class='text-danger'>File too large to upload!</h3></center>";
        }
    } else {
        echo "<center><h3 class='text-danger'>No file uploaded!</h3></center>";
    }
}
?>

                  <form action="" name="VolunteerAppForm" method="post" enctype="multipart/form-data" >
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputName" placeholder="Enter Your Name!!" name="name" maxlength="32" minlength="3" required>
                  <label for="floatingInputName">Name</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="number" class="form-control" id="floatingInputNumber" placeholder="Enter Your Age!!" min="18" max="100" name="age" required>
                  <label for="floatingInputNumber">Age</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" name="email" pattern="[^ @]*@[^ @]*" required>
                  <label for="floatingInputEmail">Email</label>
                </div>  
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputContact" placeholder="Enter Your Contact!!" name="contact" pattern="[789][0-9]{9}" maxlength="10" required>
                  <label for="floatingInputContact">Contact Number</label>
                </div>
                <div class="form-floating form-control-lg">
                  <textarea class="form-control" placeholder="Enter Your Address!!" id="floatingTextareaAddress" name="address" minlength="20" required></textarea>
                  <label for="floatingTextareaAddress">Address</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputCity" placeholder="Enter Your City!!" name="city" minlength="3" required> 
                  <label for="floatingInputCity">City</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputState" placeholder="Enter Your State!!" name="state" minlength="3" required>
                  <label for="floatingInputState">State</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputCountry" placeholder="Enter Your Country!!" name="country" minlength="3" required>
                  <label for="floatingInputCountry">Country</label>
                </div>
                <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputCode" placeholder="Enter Your Zip Code!!" name="zipCode" pattern="[1-9][0-9]{5}" required>
                  <label for="floatingInputCode">Zip Code</label>
                </div>
                <!-- <div class="form-floating form-control-lg">
                  <input type="text" class="form-control" id="floatingInputOccupation" placeholder="Enter Your Occupation!!" name="occupation">
                  <label for="floatingInputOccupation">Occupation</label>
                </div> -->
                <div class="form-floating form-control-lg">
                  <select class="form-select" id="floatingSelect" name="occupation" required>
                    <option value="" disabled >Select Occupation</option>
                    <option value="Student">Student</option>
                    <option value="Employee">Employee</option>
                  </select>
                  <label for="floatingSelect">Occupation</label>
                </div>
                <label for="formIDproof" class="form-label">Upload ID Proof</label>
                <input class="form-control form-control-lg" id="formIDproof" type="file" name="IDProof" required/>
                <br>
                <input class="btn btn-success" type="submit" value="Submit" name="submit">
                <input class="btn btn-info" type="reset" value="Reset">
              </form>
              </div>
            </div>

<?php
include("footer.php");
?>
    
</body>
</html>