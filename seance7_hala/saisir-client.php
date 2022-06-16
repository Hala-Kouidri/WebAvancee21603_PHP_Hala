<?php
require_once "db/connex.php";

var_dump($_POST);

$nom = $_POST["nom"];


foreach ($_POST as $key => $value) {
  echo $key . "=" . $value . "<br>";
}


$sql = "insert into client (nom, adresse, phone) values(?, ?, ?)";

//on n'utilise pas ça parce que on veut verifier les informations qu'on envoi à la base de données pour eviter les attaques par injections.
// $query = $pdo->query($sql);


$query = $pdo->prepare($sql);
if($query->execute(array($nom, $adresse, $phone))){
  echo "success";
}
else{
  print_r($query->errorInfo());
}

?>