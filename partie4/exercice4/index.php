<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 4</title>
</head>

<body>
    <p>
        <?php
        $info = 'user'('Degrave', 'Rémy', 19);
        echo $info;

        function user($name, $firstname, $age)
        {
            return 'Bonjour ' . $name .' ' .  $firstname .  ', tu as ' . $age . ' ans.';
        };
        ?>
    </p>
</body>

</html>