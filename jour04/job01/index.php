<?php 
$getData = $_GET;
$count = 0;

foreach ($getData as $data) {
  if (isset($getData['name']) AND isset($getData['email'])) {
    $count++;
  }
}
echo 'votre nom : ' .$getData['name'] . '<br>'. ' votre email : ' . $getData['email']. '<br>';
echo 'il ya ' .$count .' arguments';

echo "<pre>";
var_dump($getData);






?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get & Post</title>
</head>
<body>
  <h1>Les Superglobales</h1>

  <form action="" method="GET">
    <div>
      <label for="name"></label>
      <input type="text" name ="name">
    </div>
    <div>
      <label for="email"></label>
      <input type="email" name ="email">
    </div>
  
    <input type="submit" value="envoyer">
  </form>
  
</body>
</html>