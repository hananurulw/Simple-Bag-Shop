<?php
ob_start();
include("koneksi.php");

// Validasi checkbox
$alamat_sama = isset($_POST['Alamat_Sama']) ? 'Sama' : 'Tidak'; // 1 = dicentang, 0 = tidak
$Simpan_Informasi = isset($_POST['Simpan_Informasi']) ? 'Iya' : 'Tidak';
$Pembayaran = isset($_POST['Pembayaran']) ? $_POST['Pembayaran'] : '';

// Sanitasi input
$nama_depan = mysqli_real_escape_string($koneksi, $_POST['Nama_Depan']);
$nama_belakang = mysqli_real_escape_string($koneksi, $_POST['Nama_Belakang']);
$nama_pengguna = mysqli_real_escape_string($koneksi, $_POST['Nama_Pengguna']);
$email = mysqli_real_escape_string($koneksi, $_POST['Email']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['Alamat']);
$produk = mysqli_real_escape_string($koneksi, $_POST['Produk']);
$negara = mysqli_real_escape_string($koneksi, $_POST['Negara']);
$provinsi = mysqli_real_escape_string($koneksi, $_POST['Provinsi']);
$kode_pos = mysqli_real_escape_string($koneksi, $_POST['Kode_Pos']);
$Pembayaran = mysqli_real_escape_string($koneksi, $_POST['Pembayaran']);
$nama_di_kartu = mysqli_real_escape_string($koneksi, $_POST['Nama_di_Kartu']);
$nomor_kartu = mysqli_real_escape_string($koneksi, $_POST['Nomor_Kartu_Kredit']);

// Query untuk memasukkan data
$query = "INSERT INTO Pemesanan (
    Nama_Depan, 
    Nama_Belakang, 
    Nama_Pengguna, 
    Email, 
    Alamat, 
    Produk, 
    Negara, 
    Provinsi, 
    Kode_Pos, 
    Alamat_Sama, 
    Simpan_Informasi, 
    Pembayaran, 
    Nama_di_Kartu, 
    Nomor_Kartu_Kredit
) VALUES (
    '$nama_depan', 
    '$nama_belakang', 
    '$nama_pengguna',
    '$email', 
    '$alamat',
    '$produk',
    '$negara',
    '$provinsi',
    '$kode_pos',
    '$alamat_sama',
    '$Simpan_Informasi',
    '$Pembayaran',
    '$nama_di_kartu',
    '$nomor_kartu'
)";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    header('location:tampil_checkout.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>
