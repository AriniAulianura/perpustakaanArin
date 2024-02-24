
<h1 class="mt-4"> peminjaman buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
       <a href="?page=peminjaman_tambah"  class="btn btn-primary"><i class="fa fa-plus"></i>silahkan isi untuk meminjam</a> 
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>user</th>
                <th>Buku</th>
                <th>Kd Pinjam</th>
                <th>Tanggal peminjaman</th>
                <th>Tanggal pengembalian</th>
                 <th>Terlambat (Hari)</th>
                <th>Total Denda</th> 
                <th>jumlah</th>
                <th>Status peminjaman</th>
                <th>Aksi</th>
            </tr>                  
                <?php
                if(isset($_POST['submit'])) {
                    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                    // $tanggal_pengembalian = strtotime("+7 day", strtotime($tanggal_pengembalian)); // +7 hari dari tgl peminjaman
                    $tanggal_pengembalian = date('Y-m-d', $tanggal_pengembalian); 
                    $terlambat_hari =  $_POST['terlambat_hari'];
                    $total_denda = $_POST['total_denda'];
                    $query =$koneksi->query("INSERT INTO peminjam (Kd_peminjam,tanggal_peminjaman, tanggal_pengembalian,terlambat_hari,total_denda,jumlah) values ('$Kd_peminjam','$tanggal_peminjaman', '$tanggal_pengembalian','$terlambat_hari','$total_denda','$jumlah')");
                    unset($_POST['submit']);
                }
                ?>
           <?php
           $query =$koneksi->query("SELECT * FROM peminjam WHERE CURDATE() > tanggal_pengembalian");
           $no = 2;
            while($r = $query->fetch_assoc()) {
                    $s = date_create($r['tanggal_pengembalian']);
                    $t = date_create(date('Y-m-d'));
                    $terlambat_hari = date_diff($s,$t);
                     $hari = $terlambat_hari->format("%a");
               // menghitung denda
                   $denda =$hari* 1000;
                    ?>
                    <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM peminjam LEFT JOIN user on  user.id_user = peminjam.id_user LEFT JOIN buku on buku.id_buku = peminjam.id_buku_FK WHERE peminjam.id_user=" . $_SESSION['user']['id_user']);
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
                        <td><?php echo $data["jumlah"]; ?></td>
                        <td><?php echo $data["status_peminjaman"]; ?></td>
                        <td>
                            <?php
                                if($data['status_peminjaman'] != 'dikembalikan') {

                            ?>
                            
                            <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                            <?php
                                }
                            ?>
                            <?php
                                }
                            ?>
                            
                            <?php
                                }
                            ?>
                      </td>
                   </tr> 
                   <?php
            
                   ?>  
         </table>
     </div>
  </div>

 </div>
 </div>