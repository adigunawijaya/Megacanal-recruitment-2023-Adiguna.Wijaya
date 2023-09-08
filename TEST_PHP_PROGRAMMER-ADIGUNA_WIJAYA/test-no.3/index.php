<?php 
    require_once "../_config/config.php";
    include '../layout/header.php';
?>

    <div id="content">
        <div class="container">
            <?php   
                $sql_judul = mysqli_query($con, "SELECT * FROM judul") or die (mysqli_error($con));
                while($data = mysqli_fetch_array($sql_judul)) { 
            ?>
                <h6 align="center">
                    <a href="edit_judul.php?id=<?=$data['id_judul']?>">
                        <i class="far fa-edit fa-lg"></i>
                    </a>
                </h6>

                <h5 align="center">
                    <?=$data['judul_1']?>
                </h5>
                <h5 align="center" style="margin-top: -10px;">
                    <u><?=$data['judul_2']?></u><br><br>
                </h5>

                <h5 style="margin-top: -10px;">
                    <small><?=$data['sub_judul_1']?></small>
                    <small><br><?=$data['sub_judul_2']?></small>
                </h5>
            <?php
                }
            ?>
                    
            <div class="container-fluid px-4">
                <div class="flex">
                    <div class="text-end" style="margin-bottom: -12px;">
                        <p>
                            <a href="" class="btn btn-light btn-sm" style="background-color:#e6e6e6"><i class="fas fa-sync-alt"></i></a>
                            <a href="add.php" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></i>  Tambah Data</a>
                        </p>  
                    </div>

                    <form method="post" name="proses">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="test-no.3">
                                <thead align="center">
                                    <tr>
                                        <th>
                                            <center>
                                                <input type="checkbox" id="select_all" value="">
                                            </center>
                                        </th>
                                        <th>No.</th>
                                        <th>No. Pesanan</th>
                                        <th>Tanggal</th>
                                        <th>Nama Supplier</th>
                                        <th>Nama Produk</th>
                                        <th>Total</th>
                                        <th><i class="fas fa-cog"></i></th>
                                    </tr>
                                </thead>

                                <tbody align="center">
                                    <?php
                                        $no = 1;
                                        $sql_pesanan = mysqli_query($con, "SELECT * FROM t_pesanan") or die (mysqli_error($con));
                                        while($data = mysqli_fetch_array($sql_pesanan)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="checked[]" class="check" value="<?=$data['id_pesanan']?>">
                                            </td>
                                            <td><?=$no++?>.</td>
                                            <td><?=$data['no_pesanan']?></td>
                                            <td><?=tgl_indo($data['tanggal'])?></td>
                                            <td><?=$data['nm_supplier']?></td>
                                            <td><?=$data['nm_produk']?></td>
                                            <td><?=$data['total']?></td>
                                            <td>
                                                <a href="edit.php?id=<?=$data['id_pesanan']?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </form>

                    <div class="box pull-right" style="margin-top: 2px;">
                        <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="fas fa-trash-alt"></i>  Hapus</button>
                        
                        <a href="report/cetak-laporan.php" target=" _blank" title="Cetak Laporan" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        new DataTable('#test-no.3');

        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if(this.checked) {
                    $('.check').each(function() {
                        this.checked = true;
                    })
                } else {
                    $('.check').each(function() {
                        this.checked = false;
                    })
                }
            });

            $('.check').on('click', function() {
                if($('.check:checked').length == $('.check').length) {
                    $('#select_all').prop('checked', true)
                } else {
                    $('#select_all').prop('checked', false)
                }
            })
        })

        function hapus() {
            var conf = confirm('Yakin akan menghapus data?')
            if(conf) {
                document.proses.action = 'del.php';
                document.proses.submit();
            }     
        }
    </script><br>
    
<?php include '../layout/footer.php'; ?>