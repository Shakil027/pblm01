<?php
session_start();
include "dbcont.php";
$user = $_SESSION['username'];
if (!$user) {
    header('Location: login.php');
}
$sql = "SELECT * FROM users WHERE username= '$user'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            
        }

       
    </style>
    
</head>
<body>
    
        <a href="logout.php" >Logout</a> 

    <h1>my data</h1>
    <?php 
         while ($r = $result->fetch_assoc()) 
         { 
    ?>
        <div >
            <h2><?php echo $r['username']; ?></h2>
            
            <h4><?php echo $r['full_name']; ?></h4>
            <p><?php echo $r['phone']; ?></p>
            <p><?php echo $r['address']; ?></p>
            <p><?php echo $r['gender']; ?></p>
             <p><?php echo $r['profession']; ?></p>
             <p><?php echo $r['birth_date']; ?></p>
             <p><?php echo $r['email']; ?></p>
         
        </div>
    <?php } ?>

    
</body>
</html>
