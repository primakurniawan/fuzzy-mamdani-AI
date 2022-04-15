<?php

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'db_pakargigibalita';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// $result = mysqli_query($mysqli, "INSERT INTO history(nama,umur, karies, ekonomi, manis, imigrasi, perawatan_khusus, minum_flour, bercak_putih, lubang_tambal,  sikat_gigi, susu_gula, topikal_fLouride, memeriksa_gigi, karang_gigi) VALUES('yuba',22, 1,2,3,1,2,3,2,1,2,3,2,1,2,3)");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
