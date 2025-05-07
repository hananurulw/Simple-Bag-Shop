<?php
ob_start();
include("koneksi.php"); // Pastikan file koneksi.php sudah menggunakan MySQLi

// Pastikan $_GET['id'] ada dan tidak kosong
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi data (pastikan hanya angka jika id adalah integer)
    if (!ctype_digit($id)) { // Validasi: hanya angka
        die("ID tidak valid");
    }

    // Query menggunakan prepared statement
    $query = "DELETE FROM Pemesanan WHERE Nomor_Kartu_Kredit = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    if ($stmt) {
        // Bind parameter (gunakan 's' jika id berupa string)
        mysqli_stmt_bind_param($stmt, 's', $id);

        // Eksekusi query
        if (mysqli_stmt_execute($stmt)) {
            header('Location: tampil_checkout.php'); // Redirect jika berhasil
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }

        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Gagal menyiapkan statement.";
    }
} else {
    echo "Error: ID tidak ditemukan atau kosong.";
}
?>
