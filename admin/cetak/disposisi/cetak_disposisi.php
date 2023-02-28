<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_disposisi WHERE id_disposisi = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Berkas Disposisi
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=data-disposisi" class="btn btn-primary">
            <i class="fas fa-long-arrow-alt-left"></i> Menu Data Berkas Disposisi</a>
          <a href="admin\cetak\disposisi\cetak_lap_disposisi.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>

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
              <th>LEVEL</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          $sql = $koneksi->query("SELECT * FROM tb_disposisi ORDER BY id_disposisi DESC");
          while ($data = $sql->fetch_assoc()) {
          ?>

            <tr>
                <td><?php echo $data['no_dumas']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['perihal']; ?></td>
                <td><?php echo $data['nama_pelapor']; ?></td>
                <td><?php echo $data['nama_terlapor']; ?></td>
                <td><?php echo $data['pangkat_terlapor']; ?></td>
                <td><?php echo $data['asal_dinas']; ?></td>
                <td><?php echo $data['uraian']; ?></td>
                <td><?php echo $data['level']; ?></td>

    </div>

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