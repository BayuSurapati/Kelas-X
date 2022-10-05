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
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        Nama Member :
    <input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">
        Gender :
        <?php 
        $arr_jk=array('l'=>'Laki-laki','p'=>'Perempuan');
        ?>
        <select name="jk" class="form-control">
            <option></option>
            <?php foreach ($arr_jk as $key_jk => $val_jk):
                if($key_jk==$dt_member['jk']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
    <option value="<?=$key_jk?>" <?=$selek?>><?=$val_jk?></option>
            <?php endforeach ?>
        </select>
        Alamat : 
<textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
        </select>
        No. Telepon : 
<textarea name="telp" class="form-control" rows="4"><?=$dt_member['telp']?></textarea>
<br>
<input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>