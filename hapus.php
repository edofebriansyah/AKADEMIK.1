<?php 
include 'koneksi.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $stmt = $koneksi->prepare("DELETE FROM mahasiswa WHERE id = ?");
    
    
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($koneksi->error));
    }

    
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        header("location:index.php?pesan=hapus");
        exit(); 
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
} else {
    echo "ID not specified.";
}

$koneksi->close();
?>
