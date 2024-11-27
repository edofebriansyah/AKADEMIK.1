<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">        
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.malasngoding.com</h3>
    </div>
    
    <br/>
    
    <a href="index.php">Lihat Semua Data</a>
 
    <br/>
    <h3>Edit data</h3>
 
    <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post">        
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>                    
            </tr>    
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>                    
            </tr>    
            <tr>
                <td>Nim</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $d['nim']; ?>"></td>                    
            </tr>    
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>                    
            </tr>                
        </table>
    </form>
    <?php } ?>
</body>
</html>