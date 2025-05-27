<?php
 include_once '../classes/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/index.js"></script>
</head>
<body>
    <?php echo $navbar; ?>
    <div class="links_rechts_margin_contact">
    <div class="Contacten_kop">
        <p>Wil je met ons in contact?
        Doe dat hier!</p>
    </div>
    <div class="contacten_grijze_rand">
        <div class="naam">
            <p>Naam</p>
            <input type="text" placeholder="Vul hier je naam in">
        </div>
        <div class="email">
            <p>Email</p>
            <input type="email" placeholder="Vul hier je email in">
        </div>
        <div class="bericht">
            <p>Bericht</p>
            <textarea placeholder="Vul hier je bericht in"></textarea>
        </div>
        <div class="button_verstuur">
            <button>Verstuur</button>
    </div>
    </div>
    <div class="margin_bottom">
        </div>
</body>
</html>