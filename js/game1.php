<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jednoduchá Hra - Hádej číslo</title>




</head>
<body>
    <div class = gametextstylee>

        <h1>HRA - HÁDEJ ČÍSLO</h1>
        <p>Chci, abys hádal číslo mezi 1 a 5:</p>
        <br>
        <br>
        <form method="post">
            <input type="number" name="guessInput">
            <button type="submit">Odeslat</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Generovat náhodné číslo mezi 1 a 5
            $targetNumber = rand(1, 5);
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