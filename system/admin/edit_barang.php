<?php   
if (isset($_POST['edit_barang'])) {
    $NamaBaru = $_POST['Nama_Barang'];
    $UkuranBaru = $_POST['Ukuran'];
    $WarnaBaru = $_POST['Warna'];
    $StokBaru = $_POST['Stok'];
    $HargaBaru = $_POST['Harga'];
    $Fotobaru =$_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    if ($NamaBaru == null) {
        $NamaBaru = $data['nama'];
    }else{
        $NamaBaru = $_POST['Nama_Barang'];
    }
    if ($UkuranBaru == null) {
        $UkuranBaru = $data['Ukuran'];
    }else{
        $UkuranBaru = $_POST['Ukuran'];
    }
    if ($WarnaBaru == null) {
        $WarnaBaru = $data['warna'];
    }else{
        $WarnaBaru = $_POST['Warna'];
    }
    if ($StokBaru == null) {
        $StokBaru = $data['stok'];
    }else{
        $StokBaru = $_POST['Stok'];
    }
    if ($HargaBaru == null) {
        $HargaBaru = $data['harga'];
    }else{
        $HargaBaru = $_POST['Harga'];
    }
    if ($Fotobaru == null) {
        $Fotobaru = $data['foto'];
    }else{
        $Fotobaru = $_FILES['foto']['name'];
    }

        $Edit ="UPDATE inventaris SET nama = '$NamaBaru', ukuran = '$UkuranBaru', warna = '$WarnaBaru',stok = '$StokBaru',harga = '$HargaBaru', foto = '$Fotobaru' WHERE id_barang = '$idBarang'";
        $exe = $koneksi->query($Edit);
        move_uploaded_file($tmp, "../../assets/img/inventory/$Fotobaru");

        echo "<script>
        alert('Data Berhasil Di Update');
        document.location.href='index.php?hal=inventori';
        </script>";
} 
?>

