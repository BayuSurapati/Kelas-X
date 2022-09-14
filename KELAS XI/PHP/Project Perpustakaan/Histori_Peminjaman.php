<?php 
    include "Header.php";
?>
<h2>Histori Peminjaman Buku</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Pinjam</th><th>Tanggal harus Kembali</th><th>Nama Buku</th><th>Status</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "Latihan_PerpusKoneksi.php";
        $qry_histori=mysqli_query($conn,"select * from peminjaman_buku order by id_peminjamanBuku desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $buku_dipinjam="<ol>";
            $qry_buku=mysqli_query($conn,"select * from  detail_peminjamanbuku join buku on buku.id_buku=detail_peminjamanbuku.id_buku where id_peminjamanBuku = '".$dt_histori['id_peminjamanBuku']."'");
            while($dt_buku=mysqli_fetch_array($qry_buku)){
                $buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";
            }
            $buku_dipinjam.="</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_cek_kembali=mysqli_query($conn,"select * from pengembalian_buku where id_peminjamanBuku = '".$dt_histori['id_peminjamanBuku']."'");
            if(mysqli_num_rows($qry_cek_kembali)>0){
                $dt_kembali=mysqli_fetch_array($qry_cek_kembali);
                $denda="denda Rp. ".$dt_kembali['denda'];
                $status_kembali="<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
                $button_kembali="";
            } else {
                $status_kembali="<label class='alert alert-danger'>Belum kembali</label>";
                $button_kembali="<a href='Kembali.php?id=".$dt_histori['id_peminjamanBuku']."' class='btn btn-warning' onclick='return confirm(\"hello\")'>Kembalikan</a>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tanggal_peminjaman']?></td><td><?=$dt_histori['tanggal_kembali']?></td><td><?=$buku_dipinjam?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "Footer.php";
?>
