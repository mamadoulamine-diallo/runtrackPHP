<?php 
$postData = $_POST; 
?>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>Clé</th>
    <th>Valeur</th>
  </tr>
  <?php foreach ($postData as $key => $value): ?>
  <tr>
    <td><?= $key ?></td>
    <td><?= $value ?></td>
  </tr>
  <?php endforeach; ?>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get & Post</title>
</head>
<body>
  <h1>Les Superglobales</h1>

  <!-- Formulaire avec méthode POST -->
  <form action="" method="POST"> 
    <div>
      <label for="name">Nom:</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email">
    </div>
  
    <input type="submit" value="Envoyer">
  </form>
  
</body>
</html>
