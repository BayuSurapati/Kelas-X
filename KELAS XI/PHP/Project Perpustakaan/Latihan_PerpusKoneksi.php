<?php

$conn=mysqli_connect('localhost', 'root', '', 'perpus_1');

if(mysqli_connect_errno()){
    printf("Koneksi gagal : %s/n", mysqli_connect_error());
    exit();
}

?>