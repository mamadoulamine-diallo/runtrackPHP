<?php 
$postData = $_POST; 
$count = 0;

foreach ($postData as $data) {
    $count++;  
};

if (isset($postData['name']) AND isset($postData['email'])) {
    echo 'votre nom : ' .$postData['name'] . '<br>'. ' votre email : ' . $postData['email']. '<br>';
    echo 'il ya ' .$count .' arguments';
}

echo "<pre>";
var_dump($postData);
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

  <form action="" method="POST"> 
    <div>
      <label for="name"></label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email"></label>
      <input type="email" name="email">
    </div>
  
    <input type="submit" value="envoyer">
  </form>
</body>
</html>
