<?php
include 'classes/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
</head>

<body>
    <?php
    echo $navbar;
    
    ?>
    
    <div class="links_rechts_margin">
        <div class="intro_text">
            <p>Hey burger liefhebber</p>
        </div>
        <div class="burger">
            <p>Heeft u zin in een burger?</p>
        </div>
        <div class="banner">
            <img src="images/burger_banner.png">
        </div>

        <div class="grijzebox">
            <div class="about_us">
                <p>Wie zijn wij?</p>
            </div>
            <div class="witerand">
                <div class="textvalk">
                    <p>Welkom bij Smokey Buns! Bij ons kun je genieten van heerlijke burgers die
                        met veel zorg en liefde worden gemaakt. Van klassieke smaken tot bijzondere
                        combinaties met een rokerige smaak er is voor ieder wat wils.
                        We gebruiken verse ingrediënten en goede producten, zodat elke burger lekker
                        en van goede kwaliteit is. Smokey Buns is niet zomaar een plek om te eten.
                        Het is een gezellige plek waar je kunt ontspannen en genieten. Of je nu snel
                        iets wilt eten of rustig wilt zitten met vrienden, je bent altijd welkom.
                        Kom gerust eens langs en ontdek waarom zoveel mensen fan zijn van Smokey Buns!</p>
                </div>
            </div>
        </div>

        <div class="brugers_one_sale">
            <p>Burgers on sale</p>
        </div>
        <div class="sale_display">
            <div class="enkel_wopper_img">
                <img src="images/Enkel_wopper.png">
            </div>
            <div class="textbox">
                <div class="text_margin">
                <div class="burger_font">
                <p>Enkel wopper</p></div>
                <div class="text_prijs_burger">
                <p>€ 2,50</p>
                <p>De enige echte wopper, met een rokerige smaak</p>
                </div>
                <div class="button_mandje">
                <button>Voeg toe aan je mandje</button>
                </div>
            </div>
        </div>
        <div class="margin_bottom">
        </div>
    </div>
</body>

</html>