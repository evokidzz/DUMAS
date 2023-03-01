<div class="card card-dark">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Tambah Data Disposisi
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="no_dumas">NO.DUMAS</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="no_dumas" name="no_dumas" placeholder="NO.PELAYANAN" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TANGGAL</label>
        <div class="col-md-6">
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="perihal">PERIHAL</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="perihal" name="perihal" placeholder="PERIHAL" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nama_pelapor">NAMA PELAPOR</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="NAMA PELAPOR" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="ktp">KTP</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="ktp" name="ktp" placeholder="KTP" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nama_terlapor">NAMA TERLAPOR</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_terlapor" name="nama_terlapor" placeholder="NAMA TERLAPOR" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="pangkat_terlapor">PANGKAT</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="pangkat_terlapor" name="pangkat_terlapor" placeholder="PANGKAT" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="asal_dinas">ASAL DINAS</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="asal_dinas" name="asal_dinas" placeholder="ASAL DINAS" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="uraian">URAIAN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="uraian" name="uraian" placeholder="" required>
        </div>
      </div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">LEVEL</label>
				<div class="col-sm-4">
					<select name="level" id="level" class="form-control">
						<option>- Pilih -</option>
						<option>Subbid Paminal</option>
						<option>Subbid Provos</option>
					</select>
				</div>
			</div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
      <a href="?page=data-disposisi" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>

<?php

if (isset($_POST['Simpan'])) {

   $sql_simpan = "INSERT INTO tb_disposisi (no_dumas,tanggal,perihal,nama_pelapor,no_ktp,nama_terlapor,pangkat_terlapor,asal_dinas,uraian,level) VALUES (
    '" . $_POST['no_dumas'] . "',
    '" . $_POST['tanggal'] . "',
    '" . $_POST['perihal'] . "',
    '" . $_POST['nama_pelapor'] . "',
    '" . $_POST['no_ktp'] . "',
    '" . $_POST['nama_terlapor'] . "',
    '" . $_POST['pangkat_terlapor'] . "',
    '" . $_POST['asal_dinas'] . "',
    '" . $_POST['uraian'] . "',
    '" . $_POST['level'] . "')";

  $query_simpan = mysqli_query($koneksi, $sql_simpan);
  mysqli_close($koneksi);

  if ($query_simpan) {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-disposisi';
			  }
		  })</script>";
  } else {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=add-disposisi';
			  }
		  })</script>" . mysqli_errno($koneksi);
  }
}
