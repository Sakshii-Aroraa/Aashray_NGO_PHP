<?php
session_start( );
include("config.php");

try{
    if(isset($_POST['adminLogin']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $query ="select * from admin_login where Email = :email AND Password = :password";
        $statement = $conn->prepare($query); 
        $statement->execute(
            array(
            ':email' => $email,
            ':password' => $password
        )
    );
    
    $count = $statement->rowCount();  
    if($count > 0)  
    {  
         $_SESSION["email"] = $email;
         header("location:admin_home.php");  
    }  
    else  
    {  
        header("location:index.php");
        //  $message = '<label>Wrong Data!!</label>';  
    } 
    
    }
}
catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  


?>