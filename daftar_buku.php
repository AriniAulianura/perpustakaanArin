<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
          </div>
          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        <h4>Daftar Buku</h4>
                        <div class="row m-4">
                          <?php
                            $i = 1;

                            $query = mysqli_query($koneksi, "SELECT * FROM buku order by id_buku asc");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                          <div class="card m-4 " style="width: 14rem;">
                            <img src="assets/img/<?php echo $data['foto']; ?>" class="card-img-top" >
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $data['judul']; ?></h5>
                              <h6>Tahun Terbit : <?php echo $data['tahun_terbit']; ?></h6>
                              <a href="detail.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-primary">Detail</a>
                              <!-- <a href="?page=peminjaman_tambah?id=<?php echo $data['id_buku']; ?>" class="btn btn-success">Pinjam</a> -->
                              <!-- <a href="aksi/aksi_favorit.php?bukuID=<?php echo $data['id_buku']; ?>" class="btn btn-outline-dark" style="width: 18%;"><i class="fas fa-bookmark-plus"></i></a> -->
                            </div>
                          </div>
                          <?php
                            }
                          ?>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>
