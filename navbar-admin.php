<?php
    session_start();

    if($_SESSION['status_login']!=true) {
        header('location: ../login.php');
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container-fluid">
    <a href="dashboard-admin.php" class="navbar-brand fs-3">Dashboard Admin</a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link fs-5 text-light hover-text" href="dashboard-admin.php">Dashboard</a>
        <a class="nav-link fs-5 text-light hover-text" href="">Outlet</a>
        <a class="nav-link fs-5 text-light hover-text" href="">Produk</a>
        <a class="nav-link fs-5 text-light hover-text" href="">Registrasi Pelanggan</a>
        <a class="nav-link fs-5 text-light hover-text" href="">Transaksi</a>
        <a class="nav-link fs-5 text-light hover-text" href="tampil-karyawan.php">Daftar Karyawan</a>
        <a class="nav-link fs-5 text-light hover-text" href="">Logout</a>
    </div>
  </div>
</nav>