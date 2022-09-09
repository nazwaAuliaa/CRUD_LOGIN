<?php
session_start();
$nama= $_POST['username'];
$kelas = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=rumahsakit','root','');
$query = $koneksi->query("select * from user where username='$username'AND password='$password'");

if($query->rowCount() > 0){

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("location:index.php");

}else
{
    header("location:form_login.php");
}