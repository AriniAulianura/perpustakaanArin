<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjam WHERE id_peminjaman=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "index.php?page=peminjaman";
    </script>