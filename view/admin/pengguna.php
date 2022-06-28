<?php include'../403/admin.php'; ?>
<style type="text/css">
  img{
    width: 150px;
  }
  img:hover {
    width: 350px;
    transition: 2s;
  }
</style>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Daftar Pengguna</title>
    </head>
    <body>
      <center  style = "margin: 50px;">
        <h2 style="float: left; margin: 0;">Daftar Pengguna</h2>
        <br> <br>

        <form method="POST" action="">
          <button style="float:left;" type="submit" class="btn btn-primary" name="tambah_pengguna"> Tambah</button>
        </form>
        
        <?php 
        if (isset($_POST['tambah_pengguna'])) {
          include'tambah_pengguna.php';
        }
         ?>
     
      <section class="toko">
      <br> <br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Petugas</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Level</th>
              <th scope="col">Foto</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
      </section>
          <tbody>
            <?php 
            include '../../koneksi/koneksi.php';
            $sql = "SELECT * FROM  admin ORDER BY id_petugas DESC";
            $exe = $koneksi->query($sql);
            $no = 1 ;
            while ($data = $exe->fetch_array()) {
              ?>
              <tr>
                <td><?=$no++?></td>
                <td><?=$data['id_petugas']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['username']?></td>
                <td><?=$data['password']?></td>
                <td><?=$data['level']?></td>
                <td><img src="../../assets/img/admin/<?=$data['foto']?>"></td>
                <td>
                  <a href="../../system/admin/remove_pengguna.php?id=<?= $data['id_petugas'] ?>" class="btn btn-danger btn-md">Remove</a>
                </td>
              </tr>
              <?php } ?>
          </tbody>
        </table>
        <style>
          .toko table th{
            background-color: #0099ff;
            font-weight: 700;
          }
        </style>
      </center>
    </body>
  </html>