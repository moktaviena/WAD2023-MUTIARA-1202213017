<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    mysqli_query($koneksi, "DELETE from showroom_mobil WHERE id=$id");
    header("Location: form_update_mobil.php");
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if(mysqli_query($koneksi)){
        echo "<script>alert('Data telah dihapus!');window.location.href='list_mobil.php';</script>";
    }else{
        echo "<script>alert('Data tidak dapat dihapus!');window.location.href='list_mobil.php';</script>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database

?>