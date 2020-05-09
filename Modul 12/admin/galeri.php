<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../petugas/galeri.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
            <h1>Galeri</h1>
            <form class="example" action="#">
                <input type="text" placeholder="Cari Buku..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Tietz Fundamentals of CLINICAL CHEMISTRY </p>
					<p>AND MOLECULAR DIAGNOSTICS</p>
                    <p>Carl A. Burtis & David E. Bruns</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tahun Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>1104</li>
                            <li>2020</li>
                            <li>9780323239196</li>
                            <li>Inggris</li>
                            <li>Elsevier</li>
                            <li>2.4 kg</li>
                            <li>14.0 cm</li>
                            <li>21.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                </div>
                <img src="../img/buku1.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Laboratory Experiments in Microbiology</p>
                    <p>Johnson Case</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tahun Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>482</li>
                            <li>2019</li>
                            <li>9780134605203</li>
                            <li>Inggris</li>
                            <li>Pearson</li>
                            <li>0.7 kg</li>
                            <li>15.0 cm</li>
                            <li>23.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                    
                </div>
                <img src="../img/buku2.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Elsevier's Medical Laoratory Science Examination </p>
					<p>Review</p>
                    <p>Gideon Labiner, Linda Graeter,</p> 
					<p>Elizabeth Hertenstein, Charity Accurso</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tahun Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>208.0</li>
                            <li>2014</li>
                            <li>9780323358224</li>
                            <li>Inggris</li>
                            <li>Elsevier</li>
                            <li>0.28 kg</li>
                            <li>14.0 cm</li>
                            <li>21.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                   
                </div>
                <img src="../img/buku3.jpg" alt="">
            </div>
            <div><center><button class="button">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Komang Dhiyo Yonatha Wijaya</p>
        </div>
        
    </div>
</body>
</html>