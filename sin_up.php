
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto&display=swap" rel="stylesheet">
    <title>sin up</title>
    <link rel="sstylesheet" href="bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="sin-up.css">
</head>

<body >

<div class="container">
    <header>
        <?php require("navv.html")?>
    </header>

    <fieldset>
        <div>
            <button class="b">&</button>
        </div>
        <form action="insert.php" method="get">
            <legend style="color: white; text-align: center;">sin up</legend>
            <br>

            <div style="color: white;" class="name">
                <label><input type="text" name="firstname" placeholder="enter first name" required class="in" ></label>
                <label class="www"><input type="text" name="secondname" placeholder="enter second name" required class="in"></label>


                <br>
                <br>

                <div style="color: white;" class="email">
                    <label> <input type="email" placeholder="enter your email" required class="in" name="email"></label>
                    <label class="www"> <input type="password" placeholder="enter your password" max="8" required class="in" name="password">
                    </label>
                    <br>
                    <br>
                </div>
                <div class="p">
                    <p>prepared by :</p>
                    <p>1-azhi</p>

                    <p>2-barham</p>

                    <p>3-hama</p>
                </div>

                <div id="gen">
                   
                    <p>gender</p>
                    <br>
                    <div id="kanar ">
                        male
                        <input type="radio" name="ax" value="male">
                        fmale
                        <input type="radio" name="ax" value="female">
                    </div>
                </div>


                <br>

                <div style="color: white;">
                    Date of Birthday:
                    <input type="date" name="date" required>
                   
                </div>

                <br>

                <div>
                    Location
                    <select name="option">
                        <option >Slemani</option>
                        <option >Dhuk</option>
                        <option >Hlabja</option>
                        <option >Karkwk</option>
                        <option >Hawler</option>
                    </select>
                </div>

            </div>
            <br>
            <div><input id="azhi" style="color: tomato; " type="submit"></div>
        </form>


    </fieldset>
</div>

    <script>
        $(document).ready(function () {
            $(".in").focus(function () {

                $(this).css({ backgroundColor: "yellow" })


            });
            $(".in").blur(function () {
                $(this).css({ backgroundColor: "#fff" })

            })

            $(".b").click(function () {
                $(".p").fadeToggle();

            })

        })
    </script>

</body>

</html>
