<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
      <form method="post">
        <?php
        // $id = $_GET['id'];
        if(isset($_POST['submit'])){
            $id_buku = $_POST['id_buku'];
            $id_user = $_SESSION['user']['id_user'];
            $Kd_peminjam = $_POST['kd_peminjam'];
            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
            $jumlah = $_POST['jumlah'];
            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
            // $terlambat_hari = $_POST['terlambat_hari'];
            // $total_denda = $_POST['total_denda'];
            $status_peminjaman= $_POST['status_peminjaman'];
            $query = mysqli_query($koneksi, "INSERT INTO peminjam (id_buku_FK,id_user,Kd_peminjam,tanggal_peminjaman,tanggal_pengembalian,jumlah,status_peminjaman) VALUES ('$id_buku','$id_user','$Kd_peminjam','$tanggal_peminjaman','$tanggal_pengembalian','$jumlah','$status_peminjaman')");

            if($query) {
                echo '<script>alert("Tambah data berhasil,");</script>';
            }else{
                echo '<script>alert("Tambah data gagal,");</script>';
            }
        }
        // $query = mysqli_query($koneksi, "SELECT*FROM buku Where id_buku=$id");
        // $data= mysqli_fetch_array($query);
        ?>
            
        
        <div class="row mb-3">
            <div class="col-md-2">Buku</div>
            <div class="col-md-8">
                <select name="id_buku" class="form-control">
                <?php
                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                while($buku= mysqli_fetch_array($buk)) {
                    ?>
                    <option value="<?php echo $buku['id_buku'];?>"><?php echo $buku['judul'];?></option>
                    <?php    
                }
                ?>
                </select>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col-md-2">kode peminjaman</div>
            <div class="col-md-8">
                <textarea name="kd_peminjam"  class="form-control"></textarea>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-2">Tanggal peminjaman</div>
            <div class="col-md-8">
                <input type="date" class="form-control" name="tanggal_peminjaman">
            </div>
         </div>
         <div class="row mb-3">
            <div class="col-md-2">Tanggal pengembalian</div>
            <div class="col-md-8">
                <input type="date" class="form-control" name="tanggal_pengembalian">
            </div>
         </div>
         <div class="row mb-2">
            <div class="col-md-2">Terlambat hari</div>
            <div class="col-md-8">
                <textarea name="terlambat_hari"  class="form-control"></textarea>
            </div>
         </div>
         <div class="row mb-2">
            <div class="col-md-2">jumlah</div>
            <div class="col-md-8">
                <textarea name="jumlah"  class="form-control"></textarea>
            </div>
         </div>
         <div class="row mb-2">
            <div class="col-md-2">Total denda</div>
            <div class="col-md-8">
                <textarea name="total_denda"  class="form-control"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col-md-2">Status peminjaman</div>
            <div class="col-md-8">
            <select name="status_peminjaman" class="form-control">
              <option value="dipinjam">dipinjam</option>
              <option value="dikembalikan">dikembalikan</option>
              </select>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2"></div>`
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                </div>
              </div>
         </from>
        </div>
    </div>
 </div>
</div>

