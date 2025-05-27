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
    <div class="inlog_kop">
        <p>Inloggen</p>
    </div>
    <div class="contacten_grijze_rand">
        <div class="gebruikersnaam">
            <p>Gebruikersnaam</p>
            <input type="text" placeholder="Vul hier je gebruikersnaam in">
        </div>
        <div class="wachtwoord">
            <p>Wachtwoord</p>
            <input type="email" placeholder="Vul hier je wachtwoord in">
        </div>
        
        <div class="button_verstuur">
            <button>Verstuur</button>
    </div>
    </div>
    <div class="margin_bottom">
        </div>
</body>
</html>