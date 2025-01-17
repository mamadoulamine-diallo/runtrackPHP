<?php 
function occurences($str,$char) {
  $result = 0;
  for ($i = 0; isset($str[$i]); $i++) {
    $caractere = $str[$i];
    if ($caractere == $char) {
      $result++;
    }
  }
  return 'le nombre d\'occurences de ' .$char . ' dans $str est : ' . $result;
}
echo occurences("Bonjour","o");


?>