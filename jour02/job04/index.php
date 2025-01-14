<?php 
  for ($x = 1; $x <= 100; $x++) {
   if ($x % 3 == 0 AND $x % 5 == 0) {
      echo 'fizzBuzz' .'<br>';
    }
    if ($x % 3 == 0) {
      echo 'fizz' .'<br>';
    } else if ($x % 5 == 0) {
      echo 'buzz' .'<br>';
    }  else {
      echo $x .'<br>';
    }
  }

?>