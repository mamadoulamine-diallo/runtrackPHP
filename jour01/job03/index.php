<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tableau</title>
</head>
<body>
  <h1>Les Variables</h1>

  <?php
    $prenom = "Lamine";
    $age = 35;
    $taille = 1.77;
    $is_a_goat = true;
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td>type</td>
        <td>nom</td>
        <td>valeur</td>
    </tr>
    <tr>
        <td><?php echo gettype($prenom) ?></td>
        <td><?php echo "\$prenom" ?></td>
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($age) ?></td>
        <td><?php echo "\$age" ?></td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($taille) ?></td>
        <td><?php echo "\$taille" ?></td>
        <td><?php echo $taille ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($is_a_goat) ?></td>
        <td><?php echo "\$is_a_goat" ?></td>
        <td><?php echo $is_a_goat ? 'true' : 'false'; ?></td>
    </tr>
</table>

  
 
  
</body>
</html>






