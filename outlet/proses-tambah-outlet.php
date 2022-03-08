<?php
if($_POST){
        $Cabang=$_POST['Cabang'];
        $Alamat=$_POST['Alamat'];
        $telp=$_POST['telp'];

if(empty($Cabang))
{
echo "<script>alert('Cabang tidak boleh kosong');location.href='tambah_outlet.php';</script>";
}

elseif(empty($Alamat))
{
echo "<script>alert('Detail alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} 

elseif(empty($telp))
{
echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} 

else 
{
include "./koneksi.php";

$insert=mysqli_query($conn,"insert into outlet(Cabang, Alamat, telp) value ('".$Cabang."','".$Alamat."','".$telp."')");
if($insert){
echo "<script>alert('Outlet baru telah terinput');</script>";
} else {
echo "<script>alert('Mohon maaf data untuk oulet baru belum dapat terinput');location.href='tambah_outlet.php';</script>";
}
}
}
?>