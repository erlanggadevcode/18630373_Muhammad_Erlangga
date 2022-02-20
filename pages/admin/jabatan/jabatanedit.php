  <?php
    if(isset($post['button_create'])){

      $database = new Database();
      $insertSQL = "INSERT INTO lokasi SET nama_lokasi ='".$_POST['nama_lokasi']."'";
      $stmt = $db->prepare($insertSQL);

      if($stmt->execute()){
        echo "Simpan berhasil";
      }else{
        echo "Simpan gagal";
    }
  }
  ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lokasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Lokasi</li>
              <li class="breadcrumb-item active">Tambah Lokasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="content">
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Lokasi</h3>
        <a href="?page=lokasiread" class="btn btn-danger btn-sm float-right">
            <i class="fa fa-arrow back-circle"></i> Kembali
        </a>
        </div>

        <div class="card-body">
         <form action="" method="post">
           <div class="form-group">
          <label class="nama_lokasi">Nama Lokasi</label>
          <input type="text" name="nama_lokasi" class="form-control">
          </div>
          <a href="?pagelokasi" class="btn btn-danger btn-sm float-right">
              <i class="fa fa-times"></i> Batal
          </a>
          <button type="submit" name="button_create" class="btn btn-success btn-sm float-right> 
          <i class="fa fa-save"></i> Simpan
        </button>
      </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
    <?php include_once "partials/scripts.php" ?>
    <?php include_once "partials/scriptsdatatables.php" ?>