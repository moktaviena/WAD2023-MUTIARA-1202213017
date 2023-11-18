<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Mobil</td>
                        <td scope="col">Brand Mobil</td>
                        <td scope="col">Warna Mobil</td>
                        <td scope="col">Tipe Mobil</td>
                        <td scope="col">Harga Mobil</td>
                        <td scope="col">Aksi</td>
                    <tr>
                </thead>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM showroom_mobil";
            $result = $koneksi->query($query);
            
            
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<th scope='row'>" . $row['id'] . "</th>";
                    echo "<td>" . $row['nama_mobil'] . "</td>";
                    echo "<td>" . $row['brand_mobil'] . "</td>";
                    echo "<td>" . $row['warna_mobil'] . "</td>";
                    echo "<td>" . $row['tipe_mobil'] . "</td>";
                    echo "<td>" . $row['harga_mobil'] . "</td>";
            
                    echo "<td><a href='form_detail_mobil.php?id=" . $row['id'] . "' class='btn btn-primary'>Detail</a></td>";
                    echo "</tr>";
                }
                
            }else{
                echo "Tidak ada data dalam table";
            }
            //<!--  **********************  1  **************************     -->
            

            
            
            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
        
            
            
            

            
            ?>
            //<!--  **********************  2  **************************     -->
        </table>
        </div>
    </center>
</body>
</html>
