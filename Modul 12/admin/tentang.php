<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../petugas/tentang.php');
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
           <h1>Tentang Perpustakaan</h1>
           <p>A library is a curated collection of sources of information and similar resources, selected by experts and made accessible to a defined community for reference or borrowing, often in a quiet environment conducive to study. It provides physical or digital access to material, and may be a physical location or a virtual space, or both. A library's collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents, microform, CDs, cassettes, videotapes, DVDs, Blu-ray Discs, e-books, audiobooks, databases, and other formats. Libraries range widely in size up to millions of items. In Latin and Greek, the idea of a bookcase is represented by Bibliotheca and Bibliothēkē (Greek: βιβλιοθήκη): derivatives of these mean library in many modern languages, e.g. French bibliothèque.</p>
            <p>The first libraries consisted of archives of the earliest form of writing—the clay tablets in cuneiform script discovered in Sumer, some dating back to 2600 BC. Private or personal libraries made up of written books appeared in classical Greece in the 5th century BC. In the 6th century, at the very close of the Classical period, the great libraries of the Mediterranean world remained those of Constantinople and Alexandria. The libraries of Timbuktu were also established around this time and attracted scholars from all over the world.</p>
			<p>A library is organized for use and maintained by a public body, an institution, a corporation, or a private individual. Public and institutional collections and services may be intended for use by people who choose not to—or cannot afford to—purchase an extensive collection themselves, who need material no individual can reasonably be expected to have, or who require professional assistance with their research. In addition to providing materials, libraries also provide the services of librarians who are experts at finding and organizing information and at interpreting information needs. Libraries often provide quiet areas for studying, and they also often offer common areas to facilitate group study and collaboration. Libraries often provide public facilities for access to their electronic resources and the Internet.</p>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Komang Dhiyo Yonatha Wijaya</p>
        </div>
        
    </div>
</body>
</html>