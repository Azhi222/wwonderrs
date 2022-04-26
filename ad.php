
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <link rel="sstylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Roboto',sans-serif;
        }
        div .hhh{
            text-align: center;
            color:white;
            padding-top :50px;
        }
        .container{
            width: 100%;
    height: 100vh;
    
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(background.webp);
    background-position: center;
    background-size: cover;
    /* padding-left: 8%;
    padding-right: 8%; */
    box-sizing: border-box; 
        }
    </style>
</head>
<body>
    
    <div class="container">
    <header>
        <?php 
            require("navv.html")
        ?>
    </header>
        <div class="hhh">
        enter name of place and little ditaile:
        <br>
        <br>
        <br>
        <form action="in.php" method="get">
        <textarea name="tex" id="" cols="30" rows="10" ></textarea>
        <br>
        <input type="submit">
        </div>
        </form>
        
    </div>
</body>
</html>