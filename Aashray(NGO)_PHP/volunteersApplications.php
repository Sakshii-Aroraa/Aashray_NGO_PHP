<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer's Applications</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="modal.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Madimi+One&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&family=Whisper&display=swap');
	.details_heading
	{
		font-family: "Satisfy", cursive;
    color: darkblue;
    background-color: pink;
    text-decoration: 2px underline #DE3163;
	text-align: center;
	}
</style>
<body>
<div class="row">
	<div class="col-sm-12">
		<h1 class="details_heading">Volunteer's Applications
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-info"><a href="admin_home.php">Admin-Home</a></button> </h1>
		</h1>
		
    </div>
</div>

<?php
include("config.php");
$records=$conn->prepare("select * from volunteersform");
$records->execute( );
$showRecords=$records->fetchAll( );
echo "<table border='1' cellspacing='3' cellpadding='10' width='70%' class='table'>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Age</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
	<th>Country</th>
	<th>ZipCode</th>
	<th>Occupation</th>
	<th>IDProof Name</th>
	<th>Action</th>
    

</tr>";

if(isset($_POST['delete']))
        {
         $id=$_POST['delete'];
        $record=$conn->prepare("delete from volunteersform where id='$id'");
    
        if($record->execute())
        {
            header('location:volunteersApplications.php');
        }
        else
        {
            echo "Record Not Deleted!!";
         }
        }


foreach($showRecords as $record)
{
    echo "<tr>";
    echo "<td>". $record['Id']."</td>";
    echo "<td>". $record['Name']."</td>";
    echo "<td>". $record['Age']."</td>";
    echo "<td>". $record['Email']."</td>";
    echo "<td>". $record['Contact']."</td>";
    echo "<td>". $record['Address']."</td>";
    echo "<td>". $record['City']."</td>";
    echo "<td>". $record['State']."</td>";
    echo "<td>". $record['Country']."</td>";
    echo "<td>". $record['ZipCode']."</td>";
    echo "<td>". $record['Occupation']."</td>";
    echo "<td>". $record['IdProofName']."</td>";
    
    echo "<td><form method='post'><button name='delete' class='btn btn-sm btn-danger' value=".$record['Id'].">Delete</button></form></td>";
    echo "</tr>";
}


?>

</body>
</html>