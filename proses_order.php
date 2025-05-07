<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangani data form
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    // Proses lainnya, misalnya simpan data ke database

    // Tampilkan data yang diterima
    echo "<h2>Order Summary</h2>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Country: $country</p>";
    echo "<p>State: $state</p>";
    echo "<p>Zip: $zip</p>";
}
?>
