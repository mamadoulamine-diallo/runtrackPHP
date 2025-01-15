<?php 
  $str = "i'm sorry Dave i'm afraid i can't do that";
  $voyelle = "";
 
 for ($i = 0; isset($str[$i]); $i++) {
  $caractere = $str[$i];
    if ($caractere == 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'u' || $caractere == 'o') {
      $voyelle.= $caractere;
    }
   
 }
 echo 'les voyelles sont : ' .$voyelle ;



 
  

  
  
 

  

  





?>