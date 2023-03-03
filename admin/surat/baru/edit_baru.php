<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_baru WHERE id_baru='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}


?>

<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data Berkas Laporan Baru
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <input type='hidden' class="form-control" name="id_baru" value="<?php echo $data_cek['id_baru']; ?>" readonly />

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="no_dumas">NO.DUMAS</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="no_dumas" name="no_dumas" value="<?php echo $data_cek['no_dumas']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">TANGGAL</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data_cek['tanggal']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="perihal">PERIHAL</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="perihal" name="perihal" value="<?php echo $data_cek['perihal']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="nama_pelapor">NAMA PELAPOR</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" value="<?php echo $data_cek['nama_pelapor']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="no_ktp">KTP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $data_cek['no_ktp']; ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="nama_terlapor">NAMA TERLAPOR</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nama_terlapor" name="nama_terlapor" value="<?php echo $data_cek['nama_terlapor']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="pangkat_terlapor">PANGKAT</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="pangkat_terlapor" name="pangkat_terlapor" value="<?php echo $data_cek['pangkat_terlapor']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="asal_dinas">ASAL DINAS</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="asal_dinas" name="asal_dinas" value="<?php echo $data_cek['asal_dinas']; ?>">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="uraian">URAIAN</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="uraian" name="uraian" value="<?php echo $data_cek['uraian']; ?>">
                </div>
            </div>


        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Ubah" class="btn btn-info">
            <a href="?page=data-baru" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php




if (isset($_POST['Ubah'])) {
    $sql_ubah = "UPDATE tb_baru SET 
    no_dumas='" . $_POST['no_dumas'] . "', 
    tanggal='" . $_POST['tanggal'] . "', 
    perihal='" . $_POST['perihal'] . "', 
    nama_pelapor='" . $_POST['nama_pelapor'] . "',
    no_ktp='" . $_POST['no_ktp'] . "', 
    nama_terlapor='" . $_POST['nama_terlapor'] . "', 
    pangkat_terlapor='" . $_POST['pangkat_terlapor'] . "',      
    uraian='" . $_POST['uraian'] . "'
    WHERE id_baru='" . $_POST['id_baru'] . "'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);


    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-baru';
        }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-baru';
        }
      })</script>";
    }
}

  // $ceknosurat = mysqli_num_rows(mysqli_query($koneksi, "SELECT tb_domisili FROM no_surat WHERE no_surat='$_POST[no_surat]'"));
  // if ($ceknosurat > 0) {
  //  echo "<script>
 //      Swal.fire({title: 'No.Surat Sudah Ada',text: '',icon: 'error',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=add-domisili';
 //          }
 //      })</script>";
 //    } else {

 //     mysqli_query($koneksi, "INSERT INTO tb_domisili (no_surat,tgl_pengajuan,nik,nama,alamat,jenis_kelamin,agama,pekerjaan,status) VALUES('', 'no_surat', 
 //       'tgl_pengajuan', 'nik', 'nama', 'alamat', 'jenis_kelamin' 'agama', 'pekerjaan', 'status', 'keperluan', 'masa_berlaku' )");

 //     echo "<script>
 //      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=data-domisili';</script>";
 //        }

 //      }





  

  

     //selesai proses simpan data