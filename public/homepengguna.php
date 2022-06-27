 <div class="container mt-3"> 
    <center><h2>Informasi Pengguna</h2></center>
    <!-- <center>
    <img  width="100" src="../../assets/img/admin/<?=$data['foto']?>">
    </center>  -->
   
    <table class="table center mt-4">
        <tr>
            <td>Nama</td>
            <td><input class="form-control" type="text" name="" readonly="" value="<?= $nama ?>"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input class="form-control" type="text" name="" readonly="" value="<?= $usernamep ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input class="form-control" type="text" name="" readonly="" value="<?= $passwordp?>"><i class="fa-solid fa-eye showHidePw"></i></td>
        </tr>
    
        <tr>
            <td>Alamat</td>
            <td><input class="form-control" type="textbox" name="" readonly="" value="<?= $alamat ?>"></td>
        </tr>
    </table>
