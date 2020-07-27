<?php
include 'includes/config.php';

$delete = mysqli_query($koneksi, "DELETE FROM galeri WHERE id ='".$_GET['id']."'") ;
if($delete){
  header('location:index.php');
}else{
  echo 'eror!';
}
?>
