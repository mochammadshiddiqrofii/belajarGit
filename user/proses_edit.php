<?php
    include "koneksi.php" ;
    $id = $_POST ['id'] ;
    $nama = $_POST ['nama'] ;
    $email = $_POST ['email'] ;
    $password = $_POST ['password'] ;
    $ttl = $_POST ['ttl'] ;
    
    $iki7 = "update user set
    nama = '$nama',
    email = '$email',
    password = '$password',
    ttl = '$ttl'
    where id = '$id'
    
    " ;

    $iki8 = mysqli_query ($konek, $iki7) ;
    
    if ($iki8)
    {
    echo "User berhasil di update <br><a href=\"user/tambah_user.php\"></a>" ;
    }
?>
