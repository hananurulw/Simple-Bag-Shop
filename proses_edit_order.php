<?php
include("koneksi.php");

$id = $_POST['Nomor_Kartu_Kredit'];
$Alamat = $_POST['Alamat'];
$Produk = $_POST['Produk'];

$query = "UPDATE Pemesanan SET Alamat='$Alamat', Produk='$Produk' WHERE Nomor_Kartu_Kredit='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: tampil_checkout.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
