<h1 class="mt-4">Laporan peminjaman buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
      <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Cetak laporan</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>user</th>
                <th>Buku</th>
                <th>Kd peminjam</th>
                <th>Tanggal peminjaman</th>
                <th>Tanggal pengembalian</th>
                <th>Terlambat (Hari)</th>
                <th>Total Denda</th>
                <th>Status peminjaman</th>
                <th>aksi</th>
                
            </tr>   
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjam LEFT JOIN user on  user.id_user = peminjam.id_user LEFT JOIN buku on buku.id_buku = peminjam.id_buku_FK");
            //    echo ($query); die();
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["judul"]; ?></td>
                        <td><?php echo $data["Kd_peminjam"]; ?></td>
                        <td><?php echo $data["tanggal_peminjaman"]; ?></td>
                        <td><?php echo $data["tanggal_pengembalian"]; ?></td>
                        <td><?php echo $data["terlambat_hari"]; ?></td>
                        <td><?php echo $data["total_denda"]; ?></td>
                        <td><?php echo $data["status_peminjaman"]; ?></td>
                        <td>
                        <a href="?page=laporan_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a> 
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"href="?page=laporan_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                </td> 
                   </tr> 
                   
                   <?php
                }
                ?>
         </table>
     </div>
  </div>

 </div>
 </div>