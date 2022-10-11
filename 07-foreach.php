<?php

/* le concepte de boucle est important dans tous les languages, en PHP il existe divers manières de créer des boucles:

    foreach => boucles sur les tableaux et objets

    fro => boucles de types numériques

    while=> boucle de verification true

    do while=> boucle de vérification true avec une exécution obligatoire

    fonctions récursives=> vous créer vos propres boucles!

Les boucles ne doivent jamais être infinies.
*/
$tab1 = ["un","deux","trois","quatre","cinq"];
// affichage
foreach($tab1 as $value){
    echo $value." ";
}
echo "<br>";

//Idem avc for (ne fonctione qu'avec les tableaux indexé)

for($i=0;$i<count ($tab1);$i++){
    echo $tab1[$i]." ";
}

// affichage de toutes les clef et valeurs du tableau
foreach($tab1 as $key => $value){
    echo $key."->".$value."<br>";
}

echo"<br>";

foreach($tab1 as $clef => $valeur){
    echo $clef."->".$valeur."<br>";
}
 echo"<br>";
// tableau associatif
 $tab2 =[
    "un"=>1,
    "deux" =>2,
    3=>3,
    "yep"=>"ça va?",
    4=>"quatre",
 ];

 echo "<p>tableau associatif, le foreach est préférable à toutes les autres boucles (90%)
 </p>";
 foreach($tab2 as $value){
    echo $value." ";
 }

 foreach ($tab2 as $key => $value){
    echo $key." -> ".$value."<br>";
 }


