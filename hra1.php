<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF - 8">
        <title>Hádej Číslo</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel= "icon" type="image/x-icon" href = "data/images/ovladac.png">


    </head>

    <body style="background-color:powderblue;">
        
        <!-- NADPIS -->
        <header>
            <div class="header">
                <?php include 'templates/header.php'; ?>    <!-- PHP přesměrování na složku header.php -->
            </div>
        </header>

        <hr>


        <!-- MENU --> 

        <div class="menu">
            <?php include 'php/menu.php'; ?>
        </div>



        <main>
            <div class="maintext">
                <p> Jednoduchá hra, zkus typnout číslo od 1 po 5, uvidíme jaké máš štěstí. <br> Jestli se ti tato hra přijde jedoduchá, můžeš zkusit HARDCORE mód: <br> <a href= 'hardgamestranka.php' style="background-color: powderblue; border: 0px solid green;  "><u><b>HARDCORE MÓD</b></u> </a></p>
            </div>
        </main>

        <hr>

        
        

        <!-- hra-->
        <?php include 'js/game1.php'; ?>

       

        <hr>

        <!-- spodek stránky -->
        <div class="footer">
            <?php include 'templates/footer.php'; ?>
        </div>

        <hr>
        <br>
        <br>
        <br>    

        <div class="odkazy">
            <?php include 'templates/odkazy.php'; ?>
        </div>



        
    </body>



</html>