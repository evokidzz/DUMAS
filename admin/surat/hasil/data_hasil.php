<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_hasil WHERE id_hasil = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Berkas Hasil Penyelidikan
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=add-hasil" class="btn btn-primary">
            <i class="fa fa-edit"></i>Tambah Data</a>
        </div>
        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NO.DUMAS</th>
              <th>TANGGAL</th>
              <th>PERIHAL</th>
              <th>NAMA PELAPOR</th>
              <th>KTP</th>
              <th>NAMA TERLAPOR</th>
              <th>PANGKAT</th>
              <th>ASAL DINAS</th>
              <th>URAIAN</th>
              <th>KEPUTUSAN</th>

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_hasil ORDER BY id_hasil DESC");
            while ($data = $sql->fetch_assoc()) {
            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_dumas']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['perihal']; ?></td>
                <td><?php echo $data['nama_pelapor']; ?></td>
                <td><?php echo $data['no_ktp']; ?></td>
                <td><?php echo $data['nama_terlapor']; ?></td>
                <td><?php echo $data['pangkat_terlapor']; ?></td>
                <td><?php echo $data['asal_dinas']; ?></td>
                <td><?php echo $data['uraian']; ?></td>
                <td><?php echo $data['keputusan']; ?></td>
                <td class="text-center">
                  </a>
                  <a href="?page=edit-hasil&kode=<?php echo $data['id_hasil']; ?>" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="?page=del-hasil&kode=<?php echo $data['id_hasil']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> </a>
                  <a href="admin\cetak\hasil\cetak_con_hasil.php?id_berkas=<?= $data['id_hasil'] ?>" target="_blank" title="Cetak" class="btn btn-success btn-sm">
                    <i class="fa fa-print"></i>
                  </a>
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