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
                                <?php   
                                    $sql_judul = mysqli_query($con, "SELECT * FROM judul") or die (mysqli_error($con));
                                    while($data = mysqli_fetch_array($sql_judul)) { 
                                ?>
                                    <h5 align="center"><b><u>TAMBAH DATA</u></b></h5>
                                    <h6 align="center"><?=$data['judul_1']?></h6>
                                    <h6 align="center"><?=$data['judul_2']?><br><br></h6>
                                    <h6 class="text-black-50"><?=$data['sub_judul_1']?><br><?=$data['sub_judul_2']?></h6>
                                <?php
                                    }
                                ?>
                            </div>

                            <div class="shadow p-4 rounded mt-2" style="width: 100%; max-width: 50rem;">
                                <form action="proses.php" method="post">
                                    <div class="form-group">
                                        <label for="nomer">No. Pesanan</label>
                                        <input type="text" name="nopesanan" id="nopesanan" class="form-control" autofocus>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="namasupplier">Nama Supplier</label>
                                        <input type="text" name="namasupplier" id="namasupplier" class="form-control">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="namaproduk">Nama Produk</label>
                                        <input type="text" name="namaproduk" id="namaproduk" class="form-control">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <input type="text" name="total" id="total" class="form-control">
                                    </div><br>

                                    <div class="form-group pull-right">
                                        <input type="submit" name="add" value="simpan" class="btn btn-success btn-sm">
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