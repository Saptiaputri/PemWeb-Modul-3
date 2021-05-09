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
    $sql = "CREATE TABLE Jabatan (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Jabatan VARCHAR(30) NOT NULL, Libur VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP
    )";

// Memasukkan data ke database
    $sql = "INSERT INTO Jabatan (Jabatan, Libur)
        VALUES ('Directur Utama', 'Seminggu 2x');";
    $sql .= "INSERT INTO Jabatan (Jabatan, Libur)
        VALUES ('Manager', 'Sebulan 2x');";
    $sql .= "INSERT INTO Jabatan (Jabatan, Libur)
        VALUES ('Assisten Manager', 'Sebulan 1x');";
    $sql .= "INSERT INTO Jabatan (Jabatan, Libur)
        VALUES ('Supervisor', 'Sebulan 1x');";
    $sql .= "INSERT INTO Jabatan (Jabatan, Libur)
        VALUES ('Office Boy', 'Seminggu 1x');";
    
    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>