<?php 
    $un=$_GET["firstname"];
    $sn=$_GET["secondname"];
    $email=$_GET["email"];
    $pas=$_GET["password"];
   
    

    $date=$_GET["date"];
    $city=$_GET["option"];
if(isset($_GET["ax"])){
    $gender=$_GET["ax"];
    if($gender == 'male'){
        $gg='male';

    }else{
        $gg='female';
    }
}

    $ser="localhost";
    $usern="root";
    $pass="";
    $db="web";

    $con=new mysqli($ser,$usern,$pass,$db);
    if($con->connect_error){
        die("failed".$con->connect_error);
    }
    $ss="INSERT into sin (user,secname,pass,email,gender,d,city) VALUES('$un','$sn','$pas','$email','$gg','$date','$city')";
    if($con->query($ss) === TRUE){
        echo "<h1>sec</h1>";
    }else{
        echo "error".$ss . "<br>".$con->error;
    }
    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    
</body>
</html>