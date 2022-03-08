<?php 
    if($_GET['nama']){
        include ("../koneksi.php");
        $delete=mysqli_query($con,"delete from user where nama='".$_GET['nama']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data karyawan!');location.href='../user/tampil-karyawan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data karyawan! silakan coba kembali!');location.href='../user/tampil-karyawan.php';</script>";
        }
    }
?>