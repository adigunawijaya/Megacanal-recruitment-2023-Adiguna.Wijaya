<?php
    require_once "../_config/config.php";
    include '../layout/header.php';
?>

    <div id="content">
        <div class="container">

            <div class="">
                <a href="index.php" class="btn btn-warning btn-sm" style="padding: 1px;"><i class="fas fa-chevron-left"></i> Kembali</a>
            </div>

            <div class="container-fluid px-4">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">   
                            <div class="shadow p-4 rounded mt-2" style="width: 100%; max-width: 50rem; padding-top: 0.5rem !important; padding-bottom: 0.10rem !important;">
                                <h5><i class="far fa-edit fa-lg"></i><b> EDIT JUDUL</b></h5>
                            </div><br>

                            <?php
                                $id = $_GET['id'];
                                $sql_judul = mysqli_query($con, "SELECT * FROM judul WHERE id_judul = '$id'") or die (mysqli_error());
                                $data = mysqli_fetch_array($sql_judul);
                            ?>
                            <div class="shadow p-4 rounded mt-2" style="width: 100%; max-width: 50rem;">
                                <form action="proses_judul.php" method="post">
                                    <div class="form-group">
                                        <label for="judul1">Judul 1</label>
                                        <input type="hidden" name="id" value="<?=$data['id_judul']?>">
                                        <input type="text" name="judul1" id="judul1" class="form-control" value="<?=$data['judul_1']?>">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="judul2">Judul 2</label>
                                        <input type="text" name="judul2" id="judul2" class="form-control" value="<?=$data['judul_2']?>">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="subjudul1">Sub Judul 1</label>
                                        <input type="text" name="subjudul1" id="subjudul1" class="form-control" value="<?=$data['sub_judul_1']?>">
                                    </div><br>
                                    
                                    <div class="form-group">
                                        <label for="subjudul2">Sub Judul 2</label>
                                        <input type="text" name="subjudul2" id="subjudul2" class="form-control" value="<?=$data['sub_judul_2']?>">
                                    </div><br><p>
                                        
                                    <div class="form-group pull-right">
                                        <input type="submit" name="edit_judul" value="simpan" class="btn btn-success btn-sm">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include '../layout/footer.php'; ?>