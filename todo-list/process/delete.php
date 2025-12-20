<?php
include "../config/database.php";

// Mengambil ID tugas
$id = $_GET['id'];

// Query hapus data
$query = "DELETE FROM todos WHERE id=$id";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    header("Location: ../public/index.php");
} else {
    echo "Gagal menghapus data tugas";
}
?>
