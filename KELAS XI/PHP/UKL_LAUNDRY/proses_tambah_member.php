<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jk=$_POST['jk'];
        $telp=$_POST['telp'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into member (nama, alamat, jk, telp) value ('".$nama."','".$alamat."','".$jk."','".$telp."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
            }
        }
    }
?>
