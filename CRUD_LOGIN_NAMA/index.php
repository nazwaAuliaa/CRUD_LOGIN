<?php

session_start();
if(!isset($_SESSION["username"])) { 
   header("Location:form_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
$db = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $db->query('select * from user');

while($data = $query->fetch() ):?>
<p>
    <a href="proses_hapus.php?id=<?=$data['id']; ?>">
    <?= $data['username']?>
</a>
<button>
    <a href="proses_hapus.php?id=<?=$data['id']; ?>" class="btn btn-warning">
    hapus
</a>
</p>
<?php endwhile ?>
<a href="hapus_login.php">logout</a>