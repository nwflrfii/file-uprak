<?php
session_start();
    require 'config.php';

    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
        exit();
    }

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($koneksi, $query);
    header('Location: index.php');
    exit;
}
?>