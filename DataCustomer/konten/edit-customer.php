<?php
    //menangkap id dari halaman customer
  $id = $_GET['id'];
  //koneksi
  $koneksi = mysqli_connect("localhost","root","","data_customer");
  //query ke tabel tblcustomer dengan where
  $query = mysqli_query($koneksi,"SELECT * FROM tblcustomer where id = $id");
  //fetch data 
  $row = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
   $a = htmlspecialchars($_POST["id"]);
   $b = htmlspecialchars($_POST["tanggal"]);
   $c = htmlspecialchars($_POST["id_pesanan"]);
   $d = htmlspecialchars($_POST["nama"]);
   $e = htmlspecialchars($_POST["jumlah"]);
   $f = htmlspecialchars($_POST["warna"]);
   $g = htmlspecialchars($_POST["alamat"]);
   $h = htmlspecialchars($_POST["notelp"]);
    //sql
    $sql = " UPDATE tblcustomer SET
    tanggal = '$b',
    id_pesanan = '$c',
    nama = '$d',
    jumlah = '$e',
    warna = '$f',
    alamat = '$g',
    notelp = '$h'
    where id = $id";

    // print $sql;

    mysqli_query($koneksi,$sql);

    if(mysqli_affected_rows($koneksi)){
      echo"
      <script>
      alert ('data berhasil diupdate');
      document.location.href = '?menu=customer';
      </script>";
  }
    
    else{
      mysqli_error($koneksi);
    }
  
}
?>

<div class="content">
   <div class="box">
<form action="" method="post" enctype="multipart/form-data">
   <div class="sick">
    <h1>Input Data Customer</h1>
    <input type="hidden" name="id_customer" value="<?=$id?>">
</div> 
<div class="tabel-box">
   <label for="">Tanggal : </label>
   <input type="date" name="tanggal" value="<?= $row['tanggal'] ?>">
</div>
<div class="tabel-box">
   <label for="">Id Pesanan : </label>
   <input type="number" name="id_pesanan" value="<?= $row['id_pesanan'] ?>">
</div>
<div class="tabel-box">
   <label for="">Nama : </label>
   <input type="text" name="nama" value="<?= $row['nama'] ?>">
</div>
<div class="tabel-box">
   <label for="">Jumlah : </label>
   <input type="number" name="jumlah" value="<?= $row['jumlah'] ?>">
</div>
<div class="tabel-box">
   <label for="">Warna : </label>
   <input type="text" name="warna" value="<?= $row['warna'] ?>">
</div>
<div class="form-control">
   <label for="">Alamat</label>
   <textarea name="alamat" id="" cols="11" rows="3" placeholder="pesan"><?= $row['alamat'] ?>
                </textarea>
   <div class="tabel-box">
      <label for="">No Hp : </label>
      <input type="number" name="notelp" value="<?= $row['notelp'] ?>">
   </div>
   <button style="background-color : white;" name="submit">Simpan</button>
   <a href="index.php?menu=customer">Kembali</a>
   
</div>
</div>
</form>