<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];

        if(empty($nama || $username || $password || $role)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../admin/ubah-karyawan.php?nama=$nama'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update user set nama='$nama', username='$username', password='$password', role='$role' where nama='$nama'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data karyawan!');location.href='../admin/tampil-karyawan.php';</script>";
            } else {
            echo "<script>alert('Gagal update data karyawan! silakan coba kembali!');location.href='../admin/ubah-karyawan.php?nama=".$nama."';</script>";
            } 
        }
    }
?>