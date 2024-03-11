<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jednoduchá Hra - Hádej číslo</title>




</head>
<body>
    <div class = hardgamestyle>

        <h1>HRA - HÁDEJ ČÍSLO (HARDCORE)</h1>
        <p>Chci, abys hádal číslo mezi 1 a 100:</p>
        <br>
        <br>
        <form method="post">
            <input style ="height:50px; font-size: 50px" type="number" name="guessInput">   <!-- font-size - změna velikosti textu a somotného formuláře-->
            <button style= "font-size: 40px" type="submit">Odeslat</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Generovat náhodné číslo mezi 1 a 100
            $targetNumber = rand(1, 100);
            $guess = $_POST["guessInput"];

            // Porovnat s cílovým číslem
            if ($guess == $targetNumber) {
                echo "<p>Gratuluji! Uhádl jsi správně!</p>";
            } else {
               echo "<p>Bohužel, to není správné číslo. Správné číslo bylo $targetNumber. Zkus to znovu!</p>";
            }
        }
        ?>
    </div>


    

</body>
</html>