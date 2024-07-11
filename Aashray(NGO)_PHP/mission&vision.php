<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Mission&Vision-AASHRAY</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="modal.css">
</head>
<body>

<!-- Navbar & Modal -->
<?php
include("navbar.php");
?>

<div class="row">
            <div class="col-sm-12">
                <h1 class="aboutUs_heading">About Us</h1>
            </div>
        </div>
        <div class="row">
            
            <div class="col-sm-4">
            <div class="aboutUs_head">
                Empowered women and girls can lift their entire families and communities out of poverty.
            </div>
            </div>
            
            <div class="col-sm-8">
                <div class="aboutUs_info">
                <p>We are a not-for-profit organisation that builds capacity of communities to ensure empowerment for marginalised women and girls. Our sustainable and holistic interventions in Health, Livelihood, Education and Disaster Relief & Resilience, provide innovative solutions to deep-rooted development problems.</p>
            </div>
            </div>
        </div>
        
        <div class="container d-flex align-items-center justify-content-center flex-wrap">
            <div class="box">
                <div class="body">
                    <div class="imgContainer">
                        <img src="images/mis.jpg" alt="Our Mission">
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5">Our Mission</h3>
                            <p class="fs-6 text-white">To become an empowered, effective, and service-providing organization by instilling the principles and values of ‘AASHRAY’ to create a healthy, kind, and literate world.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="body">
                    <div class="imgContainer">
                        <img src="images/visionn.jpg" alt="Our Vision">
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5">Our Vision</h3>
                            <p class="fs-6 text-white">Deeply rooted in love and compassion, AASHRAY embarks itself in providing service to children, especially the unloved and uncared, and help them to achieve their full potential.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <div class="body">
                    <div class="imgContainer">
                        <img src="images/obj.jpg" alt="Core Objective">
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5">Our Objectives</h3>
                            <p class="fs-6 text-white">Employing and investing innovations, skills, creative methods, and techniques in all the welfare and development activities.
                                Upbringing independent, ethical, and responsible individuals as well as communities.
                                To empower and employ the educated members of the organization.
                                To provide healthy and high nutrient meals to the old-age homes.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("footer.php");
        ?>
    
</body>
</html>