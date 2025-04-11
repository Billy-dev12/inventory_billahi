<?php 

$id=$_GET['id'];

include "../../config/koneksi.php";

$query = mysqli_query($conn,"DELETE FROM jenis WHERE id_jenis  = '$id'");

//javascript

if($query){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Data tidak berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}



?>