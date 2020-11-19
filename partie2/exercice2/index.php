<?php
$age = 18;
$gender = 'homme';
if ($age >= 18 && $gender == 'homme') {
    echo "Vous êtes un homme et vous êtes majeur.";
}
elseif ($age >= 18 && $gender == 'femme') {
    echo "Vous êtes un femme et vous êtes majeur.";
}
elseif ($age < 18 && $gender == 'homme') {
    echo "Vous êtes un homme et vous êtes mineur.";
}
else{
    echo "Vous êtes une femme et vous êtes mineur.";
}





?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 2</title>
</head>
<body>
</body>
</html>