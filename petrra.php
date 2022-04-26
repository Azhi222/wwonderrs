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
    
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(ptt.jpg);
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
           <h1 >PETRA</h1>
           
       </div>
       <div >
       <p class="detaile">Petra originally known to its inhabitants as Raqmu or Raqēmō[3][4] is a historic and archaeological city in southern Jordan. It is adjacent to the mountain of Jabal Al-Madbah, in a basin surrounded by mountains forming the eastern flank of the Arabah valley running from the Dead Sea to the Gulf of Aqaba.[5] The area around Petra has been inhabited from as early as 7000 BC,[6] and the Nabataeans might have settled in what would become the capital city of their kingdom as early as the 4th century BC.[7] Archaeological work has only discovered evidence of Nabataean presence dating back to the second century BC,[8] by which time Petra had become their capital.[6] The Nabataeans were nomadic Arabs who invested in Petra's proximity to the incense trade routes by establishing it as a major regional trading hub.[6][9]

The trading business gained the Nabataeans considerable revenue and Petra became the focus of their wealth. The Nabataeans were accustomed to living in the barren deserts, unlike their enemies, and were able to repel attacks by taking advantage of the area's mountainous terrain. They were particularly skillful in harvesting rainwater, agriculture and stone carving. Petra flourished in the 1st century AD, when its famous Al-Khazneh structure – believed to be the mausoleum of Nabataean king Aretas IV – was constructed, and its population peaked at an estimated 20,000 inhabitants. </div>


    </div>
    
</body>
</html>