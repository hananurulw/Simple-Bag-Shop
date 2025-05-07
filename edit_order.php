<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="edit_order.css"> <!-- Menghubungkan dengan file CSS eksternal -->
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
        <a href="#" class="logo"></a>
        <div class="back-button" onclick="history.back()">
    <div class="arrow-wrap">
        <span class="arrow-part-1"></span>
        <span class="arrow-part-2"></span>
        <span class="arrow-part-3"></span>
    </div>
</div>
        <ul>
            <li><a href="home.html" >Home</a></li>
            <li><a href="katalog.html" >Products</a></li>
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
    <div class="container">
        <?php
        include("koneksi.php"); // Pastikan koneksi.php menggunakan MySQLi

        // Ambil data berdasarkan ID dari parameter URL
        $id = isset($_GET['id']) ? $_GET['id'] : ''; // Validasi parameter ID
        $query = "SELECT * FROM Pemesanan WHERE Nomor_Kartu_Kredit = '$id'";
        $edit = mysqli_query($koneksi, $query);

        // Periksa apakah data ditemukan
        if ($row = mysqli_fetch_assoc($edit)) {
            ?>
            <h2 class="title">Edit Orders</h2>
            <form method="POST" action="proses_edit_order.php" class="form">
                <input type="hidden" name="Nomor_Kartu_Kredit" value="<?php echo htmlspecialchars($row['Nomor_Kartu_Kredit']); ?>">
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" id="Alamat" name="Alamat" value="<?php echo htmlspecialchars($row['Alamat']); ?>" required>
                </div>
                <div class="form-group">
    <label for="Produk">Produk</label>
    <select id="Produk" name="Produk" required>
        <option value="">Pilih Produk</option>
        <option value="Bimble Coin Pouch" <?php echo ($row['Produk'] == 'Bimble Coin Pouch') ? 'selected' : ''; ?>>Bimble Coin Pouch</option>
        <option value="Daily Journey Laptop Tote Bag" <?php echo ($row['Produk'] == 'Daily Journey Laptop Tote Bag') ? 'selected' : ''; ?>>Daily Journey Laptop Tote Bag</option>
        <option value="Dog Tote Bag" <?php echo ($row['Produk'] == 'Dog Tote Bag') ? 'selected' : ''; ?>>Dog Tote Bag</option>
        <option value="Micro Classic RR01 Pouch" <?php echo ($row['Produk'] == 'Micro Classic RR01 Pouch') ? 'selected' : ''; ?>>Micro Classic RR01 Pouch</option>
        <option value="Outgoing Tote Bag" <?php echo ($row['Produk'] == 'Outgoing Tote Bag') ? 'selected' : ''; ?>>Outgoing Tote Bag</option>
        <option value="Penny Coin Pouch" <?php echo ($row['Produk'] == 'Penny Coin Pouch') ? 'selected' : ''; ?>>Penny Coin Pouch</option>
        <option value="All Day Laptop Backpack" <?php echo ($row['Produk'] == 'All Day Laptop Backpack') ? 'selected' : ''; ?>>All Day Laptop Backpack</option>
        <option value="Easy Going Mini Backpack" <?php echo ($row['Produk'] == 'Easy Going Mini Backpack') ? 'selected' : ''; ?>>Easy Going Mini Backpack</option>
        <option value="Go on Vacation Backpack" <?php echo ($row['Produk'] == 'Go on Vacation Backpack') ? 'selected' : ''; ?>>Go on Vacation Backpack</option>
        <option value="Junior Plus Backpack" <?php echo ($row['Produk'] == 'Junior Plus Backpack') ? 'selected' : ''; ?>>Junior Plus Backpack</option>
        <option value="Micro Two Way Carry" <?php echo ($row['Produk'] == 'Micro Two Way Carry') ? 'selected' : ''; ?>>Micro Two Way Carry</option>
        <option value="Picnic Mini Rucksack" <?php echo ($row['Produk'] == 'Picnic Mini Rucksack') ? 'selected' : ''; ?>>Picnic Mini Rucksack</option>
        <option value="Jumper Sling Bag" <?php echo ($row['Produk'] == 'Jumper Sling Bag') ? 'selected' : ''; ?>>Jumper Sling Bag</option>
        <option value="Concert Easy Going Sling Bag" <?php echo ($row['Produk'] == 'Concert Easy Going Sling Bag') ? 'selected' : ''; ?>>Concert Easy Going Sling Bag</option>
        <option value="Concert Reround Sling Bag" <?php echo ($row['Produk'] == 'Concert Reround Sling Bag') ? 'selected' : ''; ?>>Concert Reround Sling Bag</option>
        <option value="Kumara Mini Sling Bag" <?php echo ($row['Produk'] == 'Kumara Mini Sling Bag') ? 'selected' : ''; ?>>Kumara Mini Sling Bag</option>
        <option value="City Strolling Sling Bag" <?php echo ($row['Produk'] == 'City Strolling Sling Bag') ? 'selected' : ''; ?>>City Strolling Sling Bag</option>
        <option value="Go Active Sling Bag" <?php echo ($row['Produk'] == 'Go Active Sling Bag') ? 'selected' : ''; ?>>Go Active Sling Bag</option>
    </select>
</div>

                <div class="form-actions">
                    <button type="submit" class="btn-submit">Update</button>
                </div>
            </form>
            <?php
        } else {
            echo "<p class='error-message'>Data tidak ditemukan.</p>";
        }
        ?>
    </div>
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
<script src="action.js"></script
</html>
