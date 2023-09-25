<?php
if($_GET['menu'] == "" || $_GET['menu'] == "home") {
    include("./konten/home.php");
}
elseif($_GET['menu'] == "customer") {
    include("./konten/customer.php");
}
elseif($_GET['menu'] == "tambah-customer") {
    include("./konten/tambah-customer.php");
}
elseif($_GET['menu'] == "edit-customer") {
    include("./konten/edit-customer.php");
}
elseif($_GET['menu'] == "hapus-customer") {
    include("./konten/hapus-customer.php");
}
elseif($_GET['menu'] == "logout") {
    session_start();
    session_destroy();
    header('Location: index.php');
}
