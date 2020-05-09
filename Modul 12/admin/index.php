<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../petugas/index.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <p align="right">Selamat Datang <?php echo $_SESSION['User']?></p>
    <p align="right">Level User: <?php echo $_SESSION['level']?></p>

    <div id="batas">
        <div id="atas">
            <img src="../img/banner.jpg" alt="">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
        <div id="sidebar">
            <img src="../img/logo.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="tentang.php">TENTANG</a></li>
                <li><a href="galeri.php">GALERI</a></li>
                <li><a href="kontak.php">KONTAK</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p>Academic libraries are generally located on college and university campuses and primarily serve the students and faculty of that and other academic institutions. Some academic libraries, especially those at public institutions, are accessible to members of the general public in whole or in part.(Place holder text)</p>
            <h1>Galeri</h1>
            <div class = "galeri">
                <img src="../img/buku1.jpg" alt="">
                <p><a href="galeri.php">Baca Lebih Lanjut >></a></p>
            </div>
            <div class = "galeri">
                <img src="../img/buku2.jpg" alt="">
                <p><a href="galeri.php">Baca Lebih Lanjut >></a></p>
            </div>
            
            <div class = "galeri">
                <img src="../img/buku3.jpg" alt="">
                <p><a href="galeri.php">Baca Lebih Lanjut >></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Komang Dhiyo Yonatha Wijaya</p>
        </div>
        
    </div>
</body>
</html>
