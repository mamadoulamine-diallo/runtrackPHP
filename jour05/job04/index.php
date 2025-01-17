<?php 
function calcule($a,$x, $b) {
  $resultat = 0;
 switch($x) {
  case '+' :
    $resultat = $a + $b;
    break;
  case '*' :
    $resultat = $a * $b;
    break;
  case '-' :
    $resultat = $a - $b;
    break;
  case '/' :
    $resultat = $a / $b;
    break;
  case '%' :
    $resultat = $a % $b;
    break;
  default:
  echo 'Operateur Invalide';
 }
 return $resultat;
  
}

echo calcule(5,'*',2);
  
  

?>