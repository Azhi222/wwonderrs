<?php 

    $ad=$_GET["tex"];

    $w="localhost";
    $usern="root";
    $pass="";
    $db="web";

    $con=new mysqli($w,$usern,$pass,$db);
    if($con->connect_error){
        die("failed".$con->connect_error);
    }
    $s="INSERT into addd(ad) VALUES ('$ad')";
    if($con->query($s) === TRUE){
        echo "<h1>sec</h1>";
    }else{
        echo "error".$s . "<br>".$con->error;
    }
    $con->close();

?>
<style>
        body{
            background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(background.webp);
            background-position: center;
            background-size: cover;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box; 
        }
        h1{
            
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <link rel="sstylesheet" href="bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
    
    </div>
</body>
</html>