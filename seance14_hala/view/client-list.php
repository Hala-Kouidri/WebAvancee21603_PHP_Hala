<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Client</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
<<<<<<< HEAD
<?php
    foreach($clients as $client){
        extract($client);
        echo '<tr><td>'.$nom.'</td><td>'.$adresse.'</td><td>'.$phone.'</td></tr>';
    }
?>
    </table>
</body>
</html>
=======
        {% for client in clients %}
        <tr>
            <td>{{client.nom }}</td>
            <td>{{client.adresse }}</td>
            <td>{{client.phone }}</td>
        </tr>
        {% endfor %}
    </table>
</body>
</html>
>>>>>>> 942c79bd85a0fcdd73b600f85482439cc339d086
