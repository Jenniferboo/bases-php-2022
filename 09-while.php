<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle while</h1>
    <p>C'est une boucle qui permet de tourner tant que ses paramètre nous donnent true. C'est la boucle la plus dangeureuse car on arrive à faire une boucle infinie non prévue. Son avantage est quel est la plus rapide.</p>
    <pre><code>
        while(tant que c'est vrai) {
        exécution ...
                    }
</code></pre>
<?
$i=5;
while($i<20){
    echo "$i ";
    $i+=5;
}
echo "<hr>";
// Voici un tableau indexé avec 5 valeurs.
$tab = [0,1,2,3,4];

//Seul le 0 représente "false", les autres valent "true".
//on va mettre dans le while une valeur au hasard de notre tableau avec array_rand

/*création d'une fonction utilisateur nommé nombreTableauHasard qui a besoin d'un tableau en paramètre ($value) */
function nombreTableauHasard(array $value){
    // création d'une variable locale qui va contenir une valeur du tableau au hasard
    $nombre = array_rand($value);
    if ($nombre==0){
        //on envoie false (pour notre while -> fin de la boucle)
        return false;
        //sinon
    }
        else {
            //on renvoie le nombre venant du tableau
            return $nombre;
        }

    }
// tan que nombreTableauHasard($tab) vaut vrai (true), la boucle pourra s'arrêter car la valeur 0 renvoie false


while($a = nombreTableauHasard($tab)){
    // on affiche le numérique récupérer
    echo "$a";
}
?>
    
</body>
</html>