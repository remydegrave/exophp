<?php
// Déclaration de la variable $name et initisialisation avec la valeur "Rémy"
$name = 'Rémy';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 1</title>
</head>

<body>
    <p>Bonjour <?php echo $name; ?> , comment vas-tu ?</p>
    <p><?php echo 'Bonjour ' .$name.' , comment vas-tu ?';?></p>
</body>

</html>