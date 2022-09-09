<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1> ini Halaman User <h1>":
    echo $_SESSION["username"];

}