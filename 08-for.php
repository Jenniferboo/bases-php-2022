<h1>For</h1>
<p>Le for est souvent utilisé pour afficher des leistes numérique, (classement, pagination, etc...)</p>
<p>Par défaut on utilise généalement $i comme variables (itération), la règle la plus commune étant de mettre $i à 0 ou à 1 (déclaration ne se fait qu'une fois au début de la boucle), d'effectuer la bouvle tant que $i se ra plus petit ou plus grand qu'un nombre choisi (condition, doit devenir fals pour éviter les boucles infinie), on modifie ensuite la valeur de $i (changement) pour éviter la boucle infinie</p>
<pre><code>
    for(Déclaration ; condition ; changement){... exécution}
    </code></pre>
    <h3>Incrémentation</h3>
    <p>Ajouter 1 à une variable de type numérique</p>
    <pre><code>
$i=5;
$i = $i+1;
echo $i; // 6
$i +=1;
echo $i; // 7
$i++;
echo $i; // 8
echo $i++; // 8 car affiche $i avant d'ajouter 1
echo $i // 9
echo ++$i; // 10 car l'incrémentation se fait avant l'affichage 
    </code></pre>
    
    <?php
    // $i vaut 1 au premier tour, il passe la condition, après l'exécution il effectue le changement et recommence la boucle (sans repasser par la DéCLARATION ou INITIALISATION)
    
    for($i=1; $i <= 20; $i +=1){
echo "$i";
    }
    ?>
    <h3>Incrémentation de plus de 1</h3>
    <p>Si on veut acrémenter d'un autre chiffer que 1, l'utilisation du += est le plus courrant.</p>
    <?php
for($i=-10; $i<=10;
$i+=2){
    echo"$i ";
}
?>
<h3>Décrémentation de 1</h3>
<p>Soustrait 1 de la variables</p>
<pre><code>
$i=5;
$i = $i-1;
echo $i; // 4
$i -=1;
echo $i; // 3
$i--;
echo $i; // 2
echo $i--; // 2 car affiche $i avant de diminuer 1
echo $i // 1
echo --$i; // 0 car la décrémentation se fait avant l'affichage 
    </code></pre>
    <?php
    // affichez moi les chiffres de 1000 à 0 séparés par un espace
    //affichez-moi  tous les paires entre 2 et 1000
    //afiichez-moi tous les impaires entre 1 et -99
    // voire les réponse sur 08-01exefor.php
