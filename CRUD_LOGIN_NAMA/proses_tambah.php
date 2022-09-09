<?php
$nama = $GET_['nama'];
$user =$GET_['user'];

$database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $database->query("insert into user values('',aulia','admin')");      