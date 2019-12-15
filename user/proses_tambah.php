<?php
    include "../koneksi.php" ;
    $nama = $_POST ['nama'] ;
    $email = $_POST ['email'] ;
    $password = $_POST ['password'] ;
    $ttl = $_POST ['ttl'] ;
        
    $iki = "INSERT INTO user (nama, email, password, ttl) VALUES ('$nama', '$email', '$password', '$ttl') " ;
    $iki2 = mysqli_query ($konek, $iki) ;
    
    header("location:tambah_user.php");

?>

