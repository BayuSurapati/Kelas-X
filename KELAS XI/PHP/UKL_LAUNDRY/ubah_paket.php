<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        Jenis Paket: 
        <?php 
        $arr_nama_paket=array('kiloan'=>'Kiloan','selimut'=>'Selimut','bed_cover'=>'Bed Cover','kaos'=>'Kaos');
        ?>
        <select name="nama_paket" class="form-control">
            <option></option>
            <?php foreach ($arr_nama_paket as $key_nama_paket => $val_nama_paket):
                if($key_nama_paket==$dt_paket['nama_paket']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_nama_paket?>" <?=$selek?>><?=$val_nama_paket?></option>
            <?php endforeach ?>
        </select>
        Harga :
        <input type="number" name="harga" value=   "<?=$dt_paket['harga']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>