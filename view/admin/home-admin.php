<?php 
include'../403/admin.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Uang Masuk</title>
  </head>
  <body>
    <center  style = "margin: 50px;">
      <h2 style="float: left; margin: 0;">Daftar Pemasukan</h2>
      <br>
      <br>
      <?php 
          include '../../koneksi/koneksi.php';
          $sql = "SELECT dana FROM  kas";
          $exe = $koneksi->query($sql);
          $total = 1;
          while ($data = $exe->fetch_array()){
                  $total  = $total + $data['dana'];
          }
      ?>
      <table class="table table-striped">
        <thead>
            <tr>
                <td>Total Pendapatan</td>
                 <td>:</td>
                 <td>Rp</td>
                  <td><?= $total - 1 ?> </td>
            </tr>
          </thead>

        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No Transaksi</th>
            <th scope="col">Total Masuk</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            include '../../koneksi/koneksi.php';
            $sql = "SELECT * FROM  kas ORDER BY idkas DESC";
            $exe = $koneksi->query($sql);
            $no = 1;
            while ($data = $exe->fetch_array()) {
          ?>
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data['idkas']?></td>
                  <td><?=$data['dana']?></td>
                  <td>
                    <a href="../../system/admin/sys-hapuskas.php?idkas=<?=$data['idkas']?>" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
          <?php } ?>
        </tbody>
      </table>
    </center>
  </body>
</html>