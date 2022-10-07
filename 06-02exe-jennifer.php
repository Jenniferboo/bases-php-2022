<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Exercice 02</h1>

<?php
// création d'un tableau indexé
$tab = [
    5,
    8,
    "coucou",
    false,
    27.12,
    [
        "coucou",
        "Vous",
        "allez",
        "bien?",
        [
            9,
            "yes",
            "je vais bien!",
        ],
    ],
];




echo ucfirst($tab[5][0])." ".mb_strtolower($tab[5][1])." ".$tab[5][2]." ".$tab[5][3]."<br>";
echo ucfirst($tab[5][4][1]).", ".$tab[5][4][2];

    ?>
</body>
</html>