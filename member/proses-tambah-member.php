<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $telp=$_POST['telp'];

        if(empty($nama || $alamat || $jenis_kelamin || $telp)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='..tambah-member.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert=mysqli_query($conn,"insert into user (nama, alamat, jenis_kelamin, telp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$telp."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan karyawan!');location.href='..home.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan karyawan! silakan coba kembali!');location.href='..tambah-member.php';</script>";
            }
        }
    }
?>