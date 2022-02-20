<?php
    if(isset($_POST['button_create'])){
        
        $database = new Database;
        $db = $database->getConnection();

        $insertSQL = "INSERT INTO karyawan SET nama_karyawan ='".$_POST['nama_karyawan']."'";
        $stmt = $db->prepare($insertSQL);
        
        if($stmt->execute()){
            echo "Simpan Berhasil";
        }else{
            echo "Simpan Gagal";
        }
    }
?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">karyawan</li>
              <li class="breadcrumb-item active">Tambah karyawan</li>
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
                <h3 class="card-title">Tambah karyawan</h3>
                <a href="?page=karyawanread" class="btn btn-danger btn-sm float-right">
                Kembali
                </a>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_karyawan">Nama karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control">
                    </div>
                    <a href="?page=karyawanread" class="btn btn-danger btn-sm float-right">
                        <i class="fa fa-times"></i> Batal
                    </a> 
                    <button type="submit" name="button_create" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
<?php include_once "partials/scripts.php" ?>