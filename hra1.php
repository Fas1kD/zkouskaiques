<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF - 8">
        <title>HRA 1</title>
        <link rel = "stylesheet" href = "css/styles.css">

    </head>

    <body>
        
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


        <main>

        </main>
        

        <!-- hra-->
        <?php include 'js/game1.php'; ?>


        <!-- spodek stránky -->
        <?php include 'templates/footer.php'; ?>


        
    </body>



</html>