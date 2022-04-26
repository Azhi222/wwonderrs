<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <link rel="sstylesheet" href="bootstrap.min.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto',sans-serif;
        }
        div{
            /* text-align: center; */
            color:white;
            
        }
        .container{
            width: 100%;
        height: 100vh;
    
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(diwarichin.jpg);
        background-position: center;
        background-size: cover;
        /* padding-left: 8%;
        padding-right: 8%; */
         box-sizing: border-box; 
        }
        .head{
            text-align: center;
        }
        .detaile{
            padding-top:100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <?php 
                require('navv.html');
            ?>
        </header>
       <div class="head" >
           <h1 >GREAT WALL OF CHINA </h1>
           
       </div>
       <div >
       <p class="detaile">The Great Wall of China (traditional Chinese: 萬里長城; simplified Chinese: 万里长城; pinyin:
            Wànlǐ Chángchéng) is a series of fortifications that were built across the historical 
            northern borders of ancient Chinese states and Imperial China as protection against 
            various nomadic groups from the Eurasian Steppe. Several walls were built from as 
            early as the 7th century BC,[4] with selective stretches later joined together by Qin Shi Huang 
           (220–206 BC), the first emperor of China. Little of the Qin wall remains.[5] Later 
           on, many successive dynasties built and maintained multiple stretches of border walls. 
           The best-known sections of the wall were built by the Ming dynasty (1368–1644).

             Apart from defense, other purposes of the Great Wall have included border controls, allowing the 
            imposition of duties on goods transported along the Silk Road, regulation or encouragement of trade 
            and the control of immigration and emigration.[6] Furthermore, the defensive characteristics of the 
            Great Wall were enhanced by the construction of watchtowers, troop barracks, garrison stations, signaling
             capabilities through the means of smoke or fire, and the fact that the path of the Great Wall also served
              as a transportation corridor.</p>
       </div>


    </div>
    
</body>
</html>