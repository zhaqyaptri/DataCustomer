<?php
error_reporting(0);
session_start();
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./komponen/head.php")?>
</head>
<body>
    <?php
    if(empty($_SESSION['username'])) {
        include("./konten/login.php");
    } else {
        include("./admin.php");
    }?>
    
</body>

</html>