<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF - 8">
        <title>MojeE HRY</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel= "icon" type="image/x-icon" href = "data/images/karelv.png">

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
            <div class="indextext">
                <div class="pvindex">

                    <p>Vstupte do světa zábavy a odpočinku s našimi jedinečnými hrami, které jsme pro vás připravili s láskou a kreativitou. Naše stránka vám nabízí možnost na chvíli odpočinout od každodenního shonu a ztratit se v poutavých dobrodružstvích našich her.</p>


                    <p>Ať už si vyberete jakoukoliv hru, jedno je jisté - naše hry jsou plné radosti, vzrušení a nápaditých výzev. Takže neváhejte a připojte se k nám. Užijte si dobrodružství, které jsme pro vás připravili, a zapomeňte na starosti světa kolem sebe.</p>
                    <p>Co vás čeká? Naše hry jsou jednoduché, avšak návykové. Zároveň jsou navrženy tak, aby oslovily hráče všech věkových kategorií. Stačí jen kliknout na název hry a užijte si neomezenou zábavu přímo ve vašem prohlížeči.</p>

                </div>
            </div>
        
           

                

        </main>
        

        <!-- hra-->
        <?php include 'js/game.php'; ?>

      


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