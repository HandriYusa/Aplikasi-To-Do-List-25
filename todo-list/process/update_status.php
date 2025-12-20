<?php
include "../config/database.php";

// Mengambil parameter dari URL
$id = $_GET['id'];
$status = $_GET['status'];

// Menentukan status baru
$status_baru = ($status == 'pending') ? 'done' : 'pending';

// Query update status
$query = "UPDATE todos SET status='$status_baru' WHERE id=$id";

mysqli_query($conn, $query);

// Kembali ke halaman utama
header("Location: ../public/index.php");
?>
