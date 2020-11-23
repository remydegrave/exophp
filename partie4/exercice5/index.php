<?php
$min = 0;
$max = 300;
$chiffres_impairs = ' ';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 4</title>
</head>

<body>
    <div>
        <?php
        for ($i = $min; $i < $max; $i++) {
            if ($i % 2 == 1) {
                $chiffres_impairs .= $i . ' ';
            }
        }
        echo 'Les chiffres impairs compris entre 0 et 300 sont:' . $chiffres_impairs;
        ?>
    </div>
</body>

</html>