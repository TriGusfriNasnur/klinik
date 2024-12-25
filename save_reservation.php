<?php
// Konfigurasi database
$host = "localhost"; // atau sesuai konfigurasi server Anda
$user = "root"; // username database Anda
$password = ""; // password database Anda
$dbname = "reservasi_klinik"; // nama database Anda

// Koneksi ke database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari AJAX
$layanan = $_POST['layanan'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$NIK = $_POST['NIK'];
$usia = $_POST['usia'];
$alamatKTP = $_POST['alamatKTP'];
$domisili = $_POST['domisili'];
$noBPJS = $_POST['noBPJS'];
$noHP = $_POST['noHP'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

// Query untuk menyimpan data
$sql = "INSERT INTO reservasi (layanan, nama, jenis_kelamin, NIK, usia, alamat_KTP, domisili, no_BPJS, no_HP, tanggal, jam)
        VALUES ('$layanan', '$nama', '$jenisKelamin', '$NIK', '$usia', '$alamatKTP', '$domisili', '$noBPJS', '$noHP', '$tanggal', '$jam')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>