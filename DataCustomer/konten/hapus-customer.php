<?php
$id = $_GET['id'];
if(mysqli_query($koneksi,"DELETE FROM  tblcustomer WHERE id=$id")){
    echo "<scrip>aler('sudah dihapus!')</scrip>";
    header('Location: ?menu=customer');
}else{
    mysqli_error($koneksi);
}
?>