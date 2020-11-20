<?php
$mjf = 'best';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Partie 4</title>
</head>
<body>
    <p>
        <?php
        // Création de ma function.
        $mjf = 'best' ('MJF est le meilleur.');
        // Affichage de la function.
        echo $mjf; 
        // Paramètre function.
        function best ($text){
            $result = $text ;
            // Résultat qui va afficher ma function "MJF est le meilleur."
            return $result;
        }
        ?>
    </p>
</body>
</html>