<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 4</title>
</head>
<body>
    <p>
        <?php
        // Création de mes chaînes de caractères.
        $mjf = 'text' ('MJF est le meilleur. ',' Il est le futur.') ;
        // Affichage des functions.
        echo $mjf ;
        // Paramètre des functions.
        function text ($firstText , $secondText){
            // Pour l'affichage des 2 textes.
            $tools = $firstText . $secondText ;
            // Résultats de mes functions textes.
            return $tools;
        };
        ?>
    </p>
</body>
</html>