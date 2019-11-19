<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>index</title>
</head>
<body>
<div class="container">
    <h1 class="jumbotron" style="text-align:center">Liste des etudiants DSI22</h1>
    <a href="create.php"><button type="submit" class="btn btn-info">Nouvel étudiant</button></a>
    <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Opérations</th>
   
</tr>
    </thead>
<?php
  include 'dbconnexion.php';
   $rep=$cnx->prepare('SELECT * FROM students');
   $rep->execute();
   while($data=$rep->fetch()){
echo '<tr>';
echo '<td>'.$data['id'].'</td>';
echo '<td>'.$data['firstname'].'</td>';
echo '<td>'.$data['lastname'].'</td>';
echo '<td>'.$data['email'].'</td>';
echo '<td>'.$data['phone'].'</td>';
echo '<td><a href="edit.php?id='.$data['id'].'"><button type="submit" class="btn btn-success">Editer</button></a>&nbsp;
<a href="delete.php?id='.$data['id'].'"><button type="submit" class="btn btn-success">Supprimer</button></a>';
echo '</td>';
echo '</tr>';
   }

   ?>
    </table>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>