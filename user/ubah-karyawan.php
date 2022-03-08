<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan | Laundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

      .form-signin .checkbox {
        font-weight: 400;
      }

      .form-signin .form-floating:focus-within {
        z-index: 2;
      }

      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
    <main class="form-signin">
        <?php
            include ('../koneksi.php');
            $qry_get=mysqli_query($conn,"select * from user where nama = '".$_GET['nama']."'");
            $dt_get=mysqli_fetch_array($qry_get);
        ?>
        <form action="../user/proses-ubah-karyawan.php" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Ubah Data Karyawan</h1>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?=$dt_get['nama'] ?>">
                <label for="nama">Nama Lengkap</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?=$dt_get['username'] ?>">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?=$dt_get['password'] ?>">
                <label for="password">Password</label>
            </div>
            <div>
                <?php 
                    $arr_roles=array('admin'=>'admin','owner'=>'owner', 'kasir'=>'kasir');
                ?>
                <select name="role" id="role" class="form-select">
                    <option value="pilih" disabled selected>Pilih Jabatan</option>
                    <?php foreach ($arr_roles as $key_roles => $val_roles):
                            if($key_roles==$dt_get['role']){
                                $selek="selected";
                            } else {
                                $selek="";
                            }
                    ?>
                    <option value="<?=$key_roles?>" <?=$selek?>><?=$val_roles?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Ubah Data</button>
        </form>
    </main>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>