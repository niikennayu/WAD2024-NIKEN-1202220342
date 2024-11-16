<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    {
        $name = $_POST["stuname"];
        $nim = $_POST["stuid"];
        $class = $_POST["stuclass"];
        $angkatan = $_POST ["stuangkatan"];
        

    }

    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT nim FROM tb_student WHERE nim = '$nim' ");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (nama, nim, jurusan, angkatan)
                    VALUES ('$name', '$nim', '$class', $angkatan)";

        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
        if ($result) {
            echo "<script>alert('Mahasiswa Telah Ditambahkan');</script>";
            echo "<script>window.location.href = 'manage-students.php'</script>";
        } else {
            echo "<script>alert('NIM Salah');</script>";
        }
     } else {
        echo "<script>alert('NIM sudah ada');</script>";
    }
}
    



function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
    if (isset($_POST["create"])) {
        $name = $_POST["stuname"];
        $nim = $_POST["stuid"];
        $class = $_POST["stuclass"];
        $angkatan = $_POST ["stuangkatan"];
        

    }

    // Isi query dibawah untuk update data mahasiswa berdasarkan ID
    $query = "UPDATE tb_student SET
            stuname = '$name'
            stuclass = '$class'
            stuangkatan = '$angkatan'
            WHERE stuid=$nim";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}


?>