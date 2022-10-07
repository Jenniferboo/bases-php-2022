<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <h1>Les types de variables</h1>
             <h2>Les string (text)</h2>
    <p>Les chaines de caractère sont misent dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettres une à la suite de... Cela s'appelle de la concaténation. </p>
    <?php
    // création de la variable (ici en camelCase), avec le = qui donne la valeur En procédurale, le typage stricte n'est pas obligatoire
    $monTitre = "Bientôt la fin de ce cours interminable!";
    // affichage du contenu de la variable avec une chaîne concaténée (utilisation du . ou de la ,) gettype est une fonction permettant de récupérer le typage d'une variable ( en php 8 on utilisera plutôt get_debug_type())
         echo $monTitre." yes! <br>";
         echo "Le type de la variable est".gettype($monTitre)."!";
    ?>
    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>
    <?php
         echo 'mettre tout en majuscule : mb_strtoupper($monTitre)'.mb_strtoupper($monTitre);
    ?>
    <p>
        <a href="http://www.php.net/manual/fr/book.strings.php" target="_blank">string</a>
    </p>
        <h2>Les numériques</h2>
    <p>Les numériques sont les variables les plus utilisées pour les calcules, il existe plusieurs sous-types de ceux-ci</p>
<h3>les entiers (integer, int)</h3>
    <p>Sont des entiers les nombres sans "," positifs comme négatifs</p>
<prev>
)-$monTitre$myFirstInt = 22;
$mySecondInt =-7;
</prev>
<p>Les calculs de base se font avec les signes (+-*/)</p>

<?php
$myFirstInt = 22;
$mySecondInt =-7;

echo $myFirstInt;
echo"<br>";

//addition
    $add = $myFirstInt + $mySecondInt;
echo $add;
echo "<br>";

// soustraction
    $sous = $myFirstInt - $mySecondInt;
echo $sous;
echo "<br>";

//multiplication
    $multi = $myFirstInt * $mySecondInt;
echo $multi;
echo "<br>";

//division
    $div = $myFirstInt / $mySecondInt;
echo $div;
echo "<br>";
echo "- Ce dernier résultat de la division devient float."<br>

?>

<h3>Les chiffres à virgule (float, double ou nombres réels)</h3>
<p>Ils ont le types float, attention en cas de calculs en base 10, on peut avoir des erreurs du au fait que les ordinateurs travaillent sur les calculs en bas 16<br> On utilise le "."et pas la "," comme séparateur. <a href="https://floating-point-gui.de/" target="_blank"></a>
</p>


<?php

$firstFloat = 8.27;
$secondFloat = -79.78945321; // il y a un nombre limité de place pour les chiffres!,n
?>
<h2>Les booléens (bol, boolean)</h2>
<p>Variable représentant sur un seul bit les 2 possibilités du binaire: true ou false</p>
?>
<h3>Les types NULL (NULL)</h3>
<p>Le type null est une variable sans valeur. ATTENTION que c'est ben une variable et qu'elle va donner un résultat, le résultat NULL<br>
En booléen le résultat sera <a href="https://www.php.net/manual/fr/function.is-null.php">TRUE</a>
</p>
<?php
$nada= NULL;
?>
<h3>Les types de tableaux</h3>
<p>Les tableaux permettent de contenir plusieurs variables à l'intérieur d'une variable de type array. ILs sont multidimentionnels,càd on peut avoir autant de tableaux nécéssaire dans un tableau.</p>
<p>Il existe 2 types de tableaux: les tableaux indexés, et les tableaux associatifs</p>
<h3>tableau indexé</h3>




<h3>Tableau associatif</h3>
<p>Tableau dont on a indiqué au moins 1 des clefs, ce qui en fait un tableau associatif</p>
<?php
//création d'un tableau associatif
$tab2 = array("un"=>1,
                 "deux"=>2,        
                     "trois"=>3,
                        4 => "coucou",
                                "lala",
);

 //débogage de tableau ou objets avec print_r , moins complet que le var_dump
print_r($tab2);
echo $tab2["deux"];
?>


<hr>

<?php

//outil de débogage le plus commun

    var_dump($myFirstInt,$mySecondInt,$monTitre,$firstFloat,$secondFloat);
?>


</body>
</html>