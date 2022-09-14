<?php
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='TambahKelas.php';</script>";
 
    } else {
        include "Latihan_PerpusKoneksi.php";
        if(empty($id_kelas)){
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."', where id_kelas = '".$id_kelas."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='Tampilkelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='UbahKelas.php?id_kelas=".$id_kelas."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='TampilKelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='UbahKelas.php?id_siswa=".$id_kelas."';</script>";
            }
        }
        
    } 
}
?>
