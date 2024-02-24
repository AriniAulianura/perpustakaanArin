<h2 align="center">Laporan peminjaman buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <th>No</th>
                <th>user</th>
                <th>Buku</th>
                <th>Tanggal peminjaman</th>
                <th>Tanggal pengembalian</th>
                <th>Terlambat (Hari)</th>
                <th>Total Denda</th>
                <th>Status peminjaman</th>
                
            </tr>   
            <?php
            include "koneksi.php";
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjam LEFT JOIN user on  user.id_user = peminjam.id_user LEFT JOIN buku on buku.id_buku = peminjam.id_buku_FK");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['tanggal_peminjaman']; ?></td>
                        <td><?php echo $data['tanggal_pengembalian']; ?></td>
                        <td><?php echo $data["terlambat_hari"]; ?></td>
                        <td><?php echo $data["total_denda"]; ?></td>
                        <td><?php echo $data['status_peminjaman']; ?></td>
                   </tr>   
                   <?php
                }
                ?>
         </table>
         <script>
            window.print();
            setTimeout(function() {
                window.close();
            }, 100);
         </script>