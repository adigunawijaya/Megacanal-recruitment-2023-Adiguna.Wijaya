<?php
    require_once "../_config/config.php";
    // use Ramsey\Uuid\Uuid;
    // use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['add'])) {
        $nopesanan = trim(mysqli_real_escape_string($con, $_POST['nopesanan']));
        $tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
        $namasupplier = trim(mysqli_real_escape_string($con, $_POST['namasupplier']));
        $namaproduk = trim(mysqli_real_escape_string($con, $_POST['namaproduk']));
        $total = trim(mysqli_real_escape_string($con, $_POST['total']));
        
            mysqli_query($con, "INSERT INTO  t_pesanan (no_pesanan, tanggal, nm_supplier, nm_produk, total)
                                VALUES ('$nopesanan', '$tanggal', '$namasupplier', '$namaproduk', '$total')") or die (mysqli_error($con));
        echo "<script>window.location='index.php';</script>";

    } else if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nopesanan = trim(mysqli_real_escape_string($con, $_POST['nopesanan']));
        $tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
        $namasupplier = trim(mysqli_real_escape_string($con, $_POST['namasupplier']));
        $namaproduk = trim(mysqli_real_escape_string($con, $_POST['namaproduk']));
        $total = trim(mysqli_real_escape_string($con, $_POST['total']));
        
            mysqli_query($con, "UPDATE  t_pesanan SET no_pesanan = '$nopesanan', tanggal = '$tanggal', nm_supplier = '$namasupplier', nm_produk = '$namaproduk', total = '$total' WHERE id_pesanan = '$id'") or die (mysqli_error($con));
        echo "<script>window.location='index.php';</script>";
        
    }
?>