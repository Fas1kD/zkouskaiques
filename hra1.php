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


        <!-- MENU --> 

        <div class="menu">
            <?php include 'php/menu.php'; ?>
        </div>


        
        

        <!-- hra-->
        <?php include 'js/game1.php'; ?>

        
        <hr>


        <main>
            <div class="maintext">
                <p> Jednoduchá hra, zkus typnout číslo od 1 po 5, uvidíme jaké máš štěstí. <br> Jestli se ti tato hra přijde jedoduchá, můžeš zkusit HARDCORE mód (nahoře v menu). </p>
            </div>
        </main>

        <hr>

        <!-- spodek stránky -->
        <?php include 'templates/footer.php'; ?>


        
    </body>



</html>