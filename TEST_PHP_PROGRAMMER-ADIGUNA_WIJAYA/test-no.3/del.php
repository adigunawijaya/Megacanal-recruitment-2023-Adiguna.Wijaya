<?php
    require_once "../_config/config.php";

    $chk = $_POST['checked'];
    if(!isset($chk)) {
        echo "<script>alert('Tidak ada data yang dipilih!'); window.location='index.php';</script>";
    } else {
        foreach($chk as $id) {
            $sql = mysqli_query($con, "DELETE FROM t_pesanan WHERE id_pesanan = '$id'") or die (mysqli_error($con));
        }

        if($sql) {
            echo "<script>alert('".count($chk)." Data berhasil dihapus'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data, coba lagi!')'</script>";
        }
    }
?>