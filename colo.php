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
    
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(col.jpg);
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
           <h1 >COLOSSEUM</h1>
           
       </div>
       <div >
       <p class="detaile">The Colosseum is an oval amphitheatre in the centre of the city of Rome, Italy, just east of the Roman Forum. It is the largest ancient amphitheatre ever built, and is still the largest standing amphitheatre in the world today, despite its age. Construction began under the emperor Vespasian (r. 69–79 AD) in 72[1] and was completed in 80 AD under his successor and heir, Titus (r. 79–81).[2] Further modifications were made during the reign of Domitian (r. 81–96).[3] The three emperors that were patrons of the work are known as the Flavian dynasty, and the amphitheatre was named the Flavian Amphitheatre (Latin: Amphitheatrum Flavium; Italian: Anfiteatro Flavio [aɱfiteˈaːtro ˈflaːvjo]) by later classicists and archaeologists for its association with their family name (Flavius).

The Colosseum is built of travertine limestone, tuff (volcanic rock), and brick-faced concrete. It could hold an estimated 50,000 to 80,000 spectators at various points in its history,[4][5] having an average audience of some 65,000;[6] it was used for gladiatorial contests and public spectacles including animal hunts, executions, re-enactments of famous battles, and dramas based on Roman mythology, and briefly mock sea battles. The building ceased to be used for entertainment in the early medieval era. It was later reused for such purposes as housing, workshops, quarters for a religious order, a fortress, a quarry, and a Christian shrine</div>


    </div>
    
</body>
</html>