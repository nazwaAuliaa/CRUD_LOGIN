<?php

 $username = $_POST['username'];
 $password= $_POST['password'];
 
 $database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
 $query = $database->query("UPDATE `user ` SET nama='$nama',user='$admin' WHERE id='$id'");

 if($query){
    header("Location:index.php");
 }