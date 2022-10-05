<?php
    if($_POST){
        $id_member=$_POST['id_member'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jk=$_POST['jk'];
        $telp=$_POST['telp'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_member.php';</script>";
        } else {

            //echo "update member set nama='".$nama."', jk='".$jk."', alamat='".$alamat."', telp='".$telp."' where id_member = '".$id_member."'";
            include "koneksi.php";
            $update=mysqli_query($conn,"update member set nama='".$nama."', jk='".$jk."', alamat='".$alamat."', telp='".$telp."' where id_member = '".$id_member."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=".$id."';</script>";
            }
        } 
    }
?>
