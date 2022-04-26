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
    
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(ri.jpg);
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
           <h1 >RIO</h1>
           
       </div>
       <div >
       <p class="detaile">Rio de Janeiro  or simply Rio, literally River of January, is the second-most populous city in Brazil and the sixth-most populous in the Americas. Rio de Janeiro is the capital of the state of the same name, Brazil's third-most populous state, after São Paulo and Minas Gerais. Part of the city has been designated as a World Heritage Site, named "Rio de Janeiro: Carioca Landscapes between the Mountain and the Sea", on 1 July 2012 as a Cultural Landscape.[7]

Founded in 1565 by the Portuguese, the city was initially the seat of the Captaincy of Rio de Janeiro, a domain of the Portuguese Empire. In 1763, it became the capital of the State of Brazil, a state of the Portuguese Empire. In 1808, when the Portuguese Royal Court moved to Brazil, Rio de Janeiro became the seat of the court of Queen Maria I of Portugal. She subsequently, under the leadership of her son the prince regent João VI of Portugal, raised Brazil to the dignity of a kingdom, within the United Kingdom of Portugal, Brazil, and Algarves. Rio remained as the capital of the pluricontinental Lusitanian monarchy until 1822, when the War of Brazilian Independence began. This is one of the few instances in history that the capital of a colonizing country officially shifted to a city in one of its colonies. Rio de Janeiro subsequently served as the capital of the independent monarchy, the Empire of Brazil, until 1889, and then the capital of a republican Brazil until 1960 when the capital was transferred to Brasília.      </div>


    </div>
    
</body>
</html>