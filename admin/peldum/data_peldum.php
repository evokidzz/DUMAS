<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_peldum WHERE nik = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Pelapor Dumas
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=add-peldum" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data</a>
          <a href="admin\cetak\peldum\cetak_lap_peldum.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>
        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>DESA</th>
              <th>KECAMATAN</th>
              <th>KABUPATEN</th>
              <th>PROVINSI</th>
              <th>PEKERJAAN</th>

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_peldum ORDER BY nik DESC");
            while ($data = $sql->fetch_assoc()) {
            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['desa']; ?></td>
                <td><?php echo $data['kec']; ?></td>
                <td><?php echo $data['kab']; ?></td>
                <td><?php echo $data['prov']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td class="text-center">
                  </a>
                  <a href="?page=edit-peldum&kode=<?php echo $data['nik']; ?>" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="?page=del-peldum&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>

          <?php
            }
          }
          ?>
          </tbody>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- /.card-body -->