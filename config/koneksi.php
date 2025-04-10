<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_inventory_billahi';

$conn = mysqli_connect($hostname,$username,$password,$db_name);

if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
}

?>