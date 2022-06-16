<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>
  <style>
    input{
      display: block;
      margin: 5px;
    }
  </style>
</head>
<body>
  <h1>Client</h1>
  <form action="saisir-client.php" method="POST">
    <label for="name">Nom</label>
    <input type="text" id="name" name="nom" maxlength="30">
    <label for="add">Adresse</label>
    <input type="text" id="add" name="adresse" maxlength="30">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" maxlength="30">
    <input type="submit" name="Envoyer" value="Envoyer">
  </form>
  
</body>
</html>