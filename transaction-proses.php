<?php
session_start();

// Menambahkan transaksi ke dalam sesi jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add-transaction'])) {
    // Menyimpan transaksi
    $transaction = [
        "nama" => $_POST['nama'],
        "jenis" => $_POST['jenis'],
        "harga" => $_POST['harga'],
        "tanggal" => $_POST['tanggal']
    ];

    // Simpan transaksi ke dalam sesi
    $_SESSION['transactions'][] = $transaction;

    // Redirect kembali ke halaman index untuk menampilkan data yang sudah dimasukkan
    header("Location: index.php#transaction");
    exit();
}
?>