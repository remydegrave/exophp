<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 4</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 15 == 0) {
            echo 'fizzbuzz'. "\n";
        } elseif ($i % 3 == 0) {
            echo 'buzz'. "\n";
        } elseif ($i % 5 == 0) {
            echo 'fizz'. "\n";
        } else {
        echo $i ."\n";
        }
    }
    ?>
</body>
</html>