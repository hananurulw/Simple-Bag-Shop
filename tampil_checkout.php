<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pemesanan</title>
    <link rel="stylesheet" href="tampil_checkout.css"> <!-- Menghubungkan dengan file CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/logo.png">

    <!-- Page Title -->
    <title>Parallax Scrolling Website</title>
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<header id="header">
        <a href="#" class="logo"> </a>
        <div class="back-button" onclick="window.location.href='pemesanan.php'">
  <div class="arrow-wrap">
    <span class="arrow-part-1"></span>
    <span class="arrow-part-2"></span>
    <span class="arrow-part-3"></span>
  </div>
</div>
</div>
        <ul>
            <li><a href="home.html" >Home</a></li>
            <li><a href="katalog.html">Products</a></li>
            <li><a href="Pemesanan.php" class="active">Order</a></li>
            <li><a href="About.html">About</a></li>
        </ul>
        <script>
            // Ambil semua link di navbar
            const menuLinks = document.querySelectorAll('#header ul li a');
            
            // Tambahkan event listener untuk setiap link
            menuLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Hapus kelas active dari semua link
                    menuLinks.forEach(link => link.classList.remove('active'));
                    
                    // Tambahkan kelas active pada link yang diklik
                    e.target.classList.add('active');
                });
            });
        </script>
    </header>
    <center>
        <h1>Tabel Pemesanan</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>Produk</th>
                    <th>Negara</th>
                    <th>Provinsi</th>
                    <th>Kode Pos</th>
                    <th>Simpan Informasi</th>
                    <th>Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php"); // Pastikan file koneksi.php sudah menggunakan MySQLi
                
                // Query untuk mengambil data dari database
                $tampil = "SELECT * FROM Pemesanan";
                $hasil = mysqli_query($koneksi, $tampil); // Gunakan mysqli_query
                $no = 1;

                // Loop untuk menampilkan data
                while ($row = mysqli_fetch_assoc($hasil)) { // Gunakan mysqli_fetch_assoc
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>{$row['Alamat']}</td>";
                    echo "<td>{$row['Produk']}</td>";
                    echo "<td>{$row['Negara']}</td>";
                    echo "<td>{$row['Provinsi']}</td>";
                    echo "<td>{$row['Kode_Pos']}</td>";
                    echo "<td>{$row['Simpan_Informasi']}</td>";
                    echo "<td>{$row['Pembayaran']}</td>";
                    echo "<td>
                            <div class='button-container'>
                                <a href='edit_order.php?id={$row['Nomor_Kartu_Kredit']}' class='btn btn-edit'>Edit</a> 
                                <a href='hapus_order.php?id={$row['Nomor_Kartu_Kredit']}' class='btn btn-delete'>Hapus</a>
                            </div>
                          </td>";
                    echo "</tr>";
                    $no++;
                }
                
                ?>
            </tbody>
        </table>
    </center>
</body>
<!-- Footer -->
<footer id="footer">
    <p>&copy; 2024 Exsport. All rights reserved.</p>
    <div class="social-icons">
        <a href="https://twitter.com/yourbrand" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://facebook.com/yourbrand" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com/yourbrand" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <a href="mailto:yourbrand@example.com">Contact Us</a>

</div>  
      <!-- Include Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>

</body>

<!-- Always include javascript at end of file...just above html tag -->
<script src="action.js"></script>
</html>