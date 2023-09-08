<?php
    require_once "../_config/config.php";

    if(isset($_POST['add'])) {
        $judul1 = trim(mysqli_real_escape_string($con, $_POST['judul1']));
        $judul2 = trim(mysqli_real_escape_string($con, $_POST['judul2']));
        $subjudul1 = trim(mysqli_real_escape_string($con, $_POST['subjudul1']));
        $subjudul2 = trim(mysqli_real_escape_string($con, $_POST['subjudul2']));
        
            @mysqli_query($con, "INSERT INTO judul (id_judul, judul_1, judul_2, sub_judul_1, sub_judul_2)
                                VALUES ('$id', '$judul1', '$judul2', '$subjudul1', '$subjudul2')") or die (mysqli_error($con));
        echo "<script>window.location='index.php';</script>";
        
    } else if(isset($_POST['edit_judul'])) {
        $id = $_POST['id'];
        $judul1 = trim(mysqli_real_escape_string($con, $_POST['judul1']));
        $judul2 = trim(mysqli_real_escape_string($con, $_POST['judul2']));
        $subjudul1 = trim(mysqli_real_escape_string($con, $_POST['subjudul1']));
        $subjudul2 = trim(mysqli_real_escape_string($con, $_POST['subjudul2']));
            mysqli_query($con, "UPDATE judul SET judul_1 = '$judul1', judul_2 = '$judul2', sub_judul_1 = '$subjudul1', sub_judul_2 = '$subjudul2' WHERE id_judul = '$id'") or die (mysqli_error($con));
        echo "<script>window.location='index.php';</script>";
    }
?>
