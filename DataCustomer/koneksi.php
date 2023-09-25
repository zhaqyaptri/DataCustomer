<?php
$koneksi = mysqli_connect("localhost","root","","data_customer");
$tblcustomer = mysqli_query($koneksi,"SELECT * FROM tblcustomer");
$tbl_login = mysqli_query($koneksi,"SELECT * FROM tbl_login");

$jumlahdata=mysqli_num_rows($tblcustomer);

    
    if($koneksi->connect_error){
        die("Connection failed".$koneksi->connect_error);
    }
    echo "";
?>