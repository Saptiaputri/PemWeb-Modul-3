<?php
    $servername = "localhost";
    $database = "putrisaptia";
    $username = "root";
    $password = "";
// Membuat Koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);
// Memeriksa Koneksi 
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
// Membuat tabel
//    $sql = "CREATE TABLE Pegawai (
//        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Nama VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL, Kd_Jabatan VARCHAR(50) NOT NULL,
//        Alamat VARCHAR(50) NOT NULL, Gaji INT(50),
//        reg_date TIMESTAMP
//    )";
// Memasukkan data ke database
//    $sql = "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Robert Downey Jr', 'ironman@example.com', 'Manager ', 'Manhattan, New York', 52300000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Chris Hemsworth', 'thor@example.com', 'Supervisor', 'Melbourne, Australia', 23000000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Mandi Moore', 'rapunzel@example.com', 'Supervisor', 'Nashua, New Hamsphire', 20000000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Gayoung-Moon', 'jukyung@example.com', 'Assisten Manager', 'Karlsruhe, German', 38000000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Stephanie Lee', 'gatau@example.com', 'Assisten Manager', 'Michigan, United States', 41000000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Gayoung-Moon', 'jukyung@example.com', 'Assisten Manager', 'Karlshure, German', 38000000);";
//    $sql .= "INSERT INTO Pegawai (Nama, Email, Jabatan, Alamat, Gaji)
//        VALUES ('Rowan Atkinson', 'mrbean@example.com', 'Directur Utama', 'Consett, United Kingdom', 123500000);";

    $sql = "DELETE FROM Pegawai WHERE id=4;

    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
