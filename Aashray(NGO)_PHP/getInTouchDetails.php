<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get In Touch Details</title>
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
<div class="row">
            <div class="col-sm-12">
                <h1 class="details_heading">GetInTouch-Details 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                <button class="btn btn-info"><a href="admin_home.php">Admin-Home</a></button> </h1>
             
            </div>
        </div>
        
        <?php
        include("config.php");

        $records=$conn->prepare("select * from getintouch");
        $records->execute( );
        $showRecords=$records->fetchAll( );
        
        echo "<table border='1' cellspacing='3' cellpadding='10' width='70%' class='table'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Message</th>
        <th>Action</th>
        <th>Delete</th>
        </tr>";

        if(isset($_POST['delete']))
        {
         $id=$_POST['delete'];
        $record=$conn->prepare("delete from getintouch where id='$id'");
    
        if($record->execute())
        {
            header('location:getInTouchDetails.php');
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
            echo "<td>". $record['Email']."</td>";
            echo "<td>". $record['Contact_Number']."</td>";
            echo "<td>". $record['Message']."</td>";
            echo "<td><a href='updateRecord.php?Id=".$record['Id']." '><button class='btn btn-sm btn-primary' name='edit'>Edit</button></a></td>";
            echo "<td><form method='post'><button name='delete' class='btn btn-sm btn-danger' value=".$record['Id'].">Delete</button></form></td>";
            echo "</tr>";
        }

        echo "</table>";

        
        ?>

</body>
</html>