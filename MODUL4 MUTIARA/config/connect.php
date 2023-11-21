<!-- File ini berisi koneksi dengan database MySQL -->
<?php 
$host = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "database_modul4";

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$koneksi = mysqli_connect("$host", "$user_db","$pass_db", "$db_name" );
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// 
 
?>