<?php
require './Class/Owner.php';
require './Class/Animal.php';
require './Class/Pet.php';


$Owner1 = new Owner('Hala Kouidri','1234 Bourbonniere','H2Y 1X9','514-000-0000','hala@cmsnv.com');


$Pet1 = new Pet();
$Pet1->setProp('Loki','20-3-2019','Chien');
$Pet1->getProp();
$Pet1->age();


$Owner2 = new Owner('Lola Kouidri','1234 Serbrooke','H2Y 0X3','514-111-1111','Lola@cmsnv.com');

$Pet2 = new Pet();
$Pet2->setProp('Gato','5-5-2015');
$Pet2->getProp();
$Pet2->age();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Hala Kouidri - 1353390">

  <link rel="stylesheet" href="./css/style.css">
  <title>Exercice 1 - PHP</title>
</head>
<body>

<h2>Clinique Vétérinaire - Fiche Clients</h2>
  
</body>
</html>