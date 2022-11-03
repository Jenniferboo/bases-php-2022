<?php
    function calculBasic($num1,$num2,$op ="+"){
        //on inverse la condition avec !, attention le && devient ||
        if (!is_numeric($num1)||!is_numeric($num2)){
            return "Attention, les 2 paramètres doivent être numériques";
        }
        switch ($op){
            case "*":
                return $num1*$num2;// le return arrête la fonction et renvoie le résultat
                break; //break facultatif dans ce cas particulier
                case "-":
                    return $num1-$num2;
                    break; 
                    case "/":
                        return $num1/$num2;
                        break; 
                        default :
                        return $num1+$num2;
        }
    }