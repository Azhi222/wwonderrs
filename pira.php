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
    
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(pyr.jpg);
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
           <h1 >PYRAMID OF EGYPT</h1>
           
       </div>
       <div >
       <p class="detaile">The Egyptian pyramids are ancient masonry structures located in Egypt. Sources cite at least 118 identified Egyptian pyramids.[1][2] Most were built as tombs for the country's pharaohs and their consorts during the Old and Middle Kingdom periods.[3][4][5]

The earliest known Egyptian pyramids are found at Saqqara, northwest of Memphis, although at least one step-pyramid-like structure has been found at Saqqara, dating to the First Dynasty: Mastaba 3808, which has been attributed to the reign of Pharaoh Anedjib, with inscriptions, and other archaeological remains of the period, suggesting there may have been others.[6] The otherwise earliest among these is the Pyramid of Djoser built c. 2630–2610 BCE during the Third Dynasty.[7] This pyramid and its surrounding complex are generally considered to be the world's oldest monumental structures constructed of dressed masonry.[8]

The most famous Egyptian pyramids are those found at Giza, on the outskirts of Cairo. Several of the Giza pyramids are counted among the largest structures ever built.[9] The Pyramid of Khufu is the largest Egyptian pyramid. It is the only one of the Seven Wonders of the Ancient World still in existence; this is despite being the oldest wonder by about 2,000 years.</p>
       </div>


    </div>
    
</body>
</html>