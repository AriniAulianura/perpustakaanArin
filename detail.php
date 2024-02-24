<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PERPUSTAKAAN DIGITAL ARIN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">PERPUSTAKAN DIGITAL</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="?">
                               <i class="fas fa-tachometer-alt"></i>Dashboard  <div class="sb-nav-link-icon"></div>
                                  
                            </a>
                            <div class="sb-sidenav-menu-heading">Navigasi</div>
                            <?php
                                if($_SESSION['user']['level'] !='peminjam'){
                            ?>
                            <a class="nav-link" href="?page=kategori">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               kategori
                             </a>
                             <a class="nav-link" href="?page=buku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                               Buku
                             </a>
                            <?php 
                            }else {
                               
                            ?>
                             <a class="nav-link" href="?page=daftar_buku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                             Daftar buku
                             </a>
                             <a class="nav-link" href="?page=peminjaman">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Peminjaman
                             </a>
                             <?php
                            }
                             ?>
                             <a class="nav-link" href="?page=ulasan">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-open"></i></div>
                            Ulasan
                             </a>

                             <?php
                                if($_SESSION['user']['level'] !='peminjam'){
                            ?>
                                <a class="nav-link" href="?page=laporan">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Laporan transaksi peminjaman buku
                                </a>
                                <a class="nav-link" href="?page=data_peminjaman">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                data peminjaman buku
                                </a>
                             <?php
                            }
                             ?>

                             <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div>
                             Logout
                             </a>
                        </div>
                    </div>
                </nav>
                </div>
                <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Buku</h1>
          </div>
          <div class="card">
              <div class="card-body">
              <div class="row m-4">
                <?php
                  $id = $_GET['id'];
                 
                  $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
                  $buk = mysqli_fetch_array($query);
                ?>
                  <div class="col text-center">
                  <img src="assets/img/<?php echo $buk['foto']; ?>" height="500">
                  </div>
                  <div class="col" >
                    <table class="table table-flush">
                        <tr>
                            <td><h5>Judul Buku</h5></td>
                            <td><h5>: <?php echo $buk['judul']; ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis</h5></td>
                            <td><h5>: <?php echo $buk['penulis']; ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit</h5></td>
                            <td><h5>: <?php echo $buk['penerbit']; ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun Terbit</h5></td>
                            <td><h5>: <?php echo $buk['tahun_terbit']; ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Deskripsi</h5></td>
                            <td><h5>: <?php echo $buk['deskripsi']; ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Stok</h5></td>
                            <td><h5>: <?php echo $buk['stok']; ?></h5></td>
                        </tr>
                    </table>
                  </div>
              </div>
              </div>
          </div>