

<?php
$stagiaires=[
    "Redouan",
    "Coralie",
    "Florence",
    "Tom",
    "Billy",
    "Jaouad",
    "Frédéric",
    "Maksym",
    "Magib",
    "Pierre-Alain",
    "Youssef",
    "Jonathan",
    "Melvin",
    "Yanis",
    "Robbins",
    "Ana-Maria",
    "Jennifer",
    "Valérie",
];

// chiffre au hasard de 0 à 17
$hasard = mt_rand(0,17);

$nb1 = -100;

$nb2 = 0;

$nb3 = 100;

?>
<h1>Exe1</h1>
<?php
foreach($stagiaires as $value){
    echo $value."| ";
}
?>
<h1>Exe2</h1>
<?php
foreach($stagiaires as $key => $value){
    echo $key." -> ".$value." <br>";
}
?>
<h1>Exe3</h1>
<?php

$stagiairesArrayObject=  new ArrayObject ($stagiaires);
$stagiairesArrayObject->asort();

foreach($stagiairesArrayObject as $value ){
    sort($stagiaires);
    echo "$value\n| ";
}
?>
<h1>exe4</h1>
<?php

$i= 0


?>