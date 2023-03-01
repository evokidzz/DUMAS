<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Daftar Pejabat BAPENDA
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="admin\cetak\dumas\cetak_lap_dumas.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print">
                    </i> Cetak Data</a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
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
                    </tr>
                </thead>
                <tbody>

                    <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_dumas ORDER BY id_dumas DESC");
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
                </tr>

                    <?php
                    }
                    ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->