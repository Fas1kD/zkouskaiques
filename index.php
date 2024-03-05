<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF - 8">
        <title>Moje stranecka</title>
        <link rel = "stylesheet" href = "css/styles.css">
    </head>

    <body>
        <header>
            <div class="header">
                <?php include 'templates/header.php'; ?>    <!-- PHP přesměrování na složku header.php -->
            </div>
        </header>

        <?php include 'php/menu.php'; ?>


        <main>
            <p>AHOJ SVĚTE</p>

        </main>
        

        <div class="text">
            <?php include 'js/game.php'; ?>
        </div>


        <!-- spodek stránky -->
        <?php include 'templates/footer.php'; ?>

        
    </body>



</html>