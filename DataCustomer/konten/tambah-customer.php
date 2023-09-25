<?php
if (isset($_POST["submit"])) {
    $b = $_POST["id_pesanan"];
    $c = $_POST["nama"];
    $d = $_POST["jumlah"];
    $e = $_POST["warna"];
    $f = $_POST["alamat"];
    $g = $_POST["notelp"];

    $sql = " INSERT INTO tblcustomer VALUES
    (NULL,NOW(),'$b','$c','$d','$e','$f','$g')";

    mysqli_query($koneksi, $sql);
    if (mysqli_affected_rows($koneksi)) {
        echo "
      <script>
      alert ('data berhasil ditambahkan');
      document.location.href = '?menu=customer';
      </script>";
    } else {
        mysqli_error($koneksi);
    }
}
?>
<div class="content">
    <div class="box">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="sick">
                <h1>Input Data Customer</h1>
            </div>
            <div class="tabel-box">
                <label for="">Id Pesanan : </label>
                <input type="number" name="id_pesanan" "">
            </div>
            <div class="tabel-box">
                <label for="">Nama : </label>
                <input type="text" name="nama" id="">
            </div>
            <div class="tabel-box">
                <label for="">Jumlah : </label>
                <input type="number" name="jumlah" "">
            </div>
            <div class="tabel-box">
                <label for="">Warna : </label>
                <input type="text" name="warna" id="">
            </div>
            <div class="tabel-box">
                <label for="">Alamat : </label>
                <textarea name="alamat" id="alamat"></textarea>
            </div>
            <div class="tabel-box">
                <label for="">NoHP : </label>
                <input type="number" name="notelp" "">
            </div>
            <button style="background-color : white;" name="submit">Simpan</button>
            <a href="?menu=customer">Kembali</a>
        </form>
    </div>
</div>