<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 4</title>
</head>

<body>
    <p>
        <?php
        $nombre = 'nombres'(18, 18);
        echo $nombre;

        function nombres($number1, $number2)
        {
            if ($number1 > $number2) {
                return 'Le premier nombre est plus grand que le deuxième';
            }
            if ($number1 < $number2) {
                return 'Le premier nombre est plus petit que le deuxième';
            }
            if ($number1 == $number2) {
                return 'Les deux nombres sont identiques';
            };
        };
        ?>
    </p>
</body>

</html>