<?php 
// Déclaration de la variable $km en 3 fois et initisialisation avec les valeurs "Kilomètre : 1 "3" "125"
$km = 1 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 1</title>
</head>
<body>
    <p><?php echo $km; ?></p>
    <p><?php echo $km = 3; ?></p>
    <p><?php echo $km = 125; ?></p>
</body>
</html>