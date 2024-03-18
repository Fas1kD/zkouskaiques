<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF - 8">
        <title>HARDCORE Hádej Číslo</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel= "icon" type="image/x-icon" href = "data/images/ovladac2.png">


    </head>

    <body style="background-color:#bb0606;" >
        
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
            <div class="texthard">
                <p>Myslíš si že jsi dobrý v typování? <br> Zkus tento HARDCORE mód a uvidíme <br> 👇👇👇</p>
            <div>

        </main>
        <hr>
        

        <!-- hra-->
        <?php include 'js/hardgame.php'; ?>

        <hr>

        <div class="maintext">
            <p>Od základu přepracovná hra na typování <br> HARDCORE MÓD výběr ze STA čísel <br> <b> Myslíš si že na to máš? </b></p>
        </div>

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