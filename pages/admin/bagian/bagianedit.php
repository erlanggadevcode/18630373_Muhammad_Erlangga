<?php
    if(isset($_POST['button_create'])){
        
        $database = new Database;
        $db = $database->getConnection();

        $insertSQL = "INSERT INTO lokasi SET nama_lokasi ='".$_POST['nama_lokasi']."'";
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
                Kembali
                </a>
            </div>

            <div class="card-body">
            <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_lokasi">Nama Bagian</label>
                        <input type="text" name="nama_bagian" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_lokasi">Kepala Bagian</label>
                        <select name="karyawan_id" class="form-control">
                            <option value="" selected>--Pilih Kepala Bagian--</option>
                            <?php
                                $database = new Database();
                                $db = $database->getConnection();

                                $selectSql = "SELECT id, nama_lengkap  FROM karyawan";
                                $stmt_karyawan = $db->prepare($selectSql);
                                $stmt_karyawan->execute();

                                while($row_kry = $stmt_karyawan->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value=\"".$row_kry['id']."\">".$row_kry['nama_lengkap']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_lokasi">Lokasi</label>
                        <select name="lokasi_id" class="form-control">
                            <option value="" selected>--Pilih Lokasi--</option>
                            <?php
                                $database = new Database();
                                $db = $database->getConnection();

                                $selectSql = "SELECT * FROM lokasi";
                                $stmt_lokasi = $db->prepare($selectSql);
                                $stmt_lokasi->execute();

                                while($row_lks = $stmt_lokasi->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value=\"".$row_lks['id']."\">".$row_lks['nama_lokasi']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <a href="?page=lokasiread" class="btn btn-danger btn-sm float-right">
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