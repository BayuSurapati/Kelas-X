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
    <div class="container">
    <legend style:><h2><b>Tambah Member</b></h2></legend>
    <form action="proses_tambah_member.php" class="well form-horizontal" method="post">
        Nama Member:
        <input type="text" name="nama" value= "" class="form-control">
        Gender : 
        <?php 
        $arr_jk=array('l'=>'Laki-laki','p'=>'Perempuan');
        ?>
        <select name="jk" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        No. Telepon : 
        <input type="text" name="telp" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
    </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>