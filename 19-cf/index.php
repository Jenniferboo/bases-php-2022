<?php 
//Appel des dépendances
require_once "config.php";
//Si il existe une variable get nommé page (on a cliqué sur un lien)
if(isset($_GET['page'])){
 
    //Sinon
}else{
//inclusion d'homepage une seul X
include_once "hompage.php";

}
?>