<?php
if ($_POST) {
    $durasi = $_POST;
}

if ($durasi >= 15) {
    $hasil = "Boleh mam nasi 5 sendok";
} elseif ($durasi <= 15 && $durasi >= 0) {
    $hasil = "Tidak boleh mam nasi";
} elseif ($durasi = 0) {
    $hasil = "Tidak makan malam dan melakukan olahraga ringan di malam hari selama 5 menit.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
                <form action="" method="POST">                             
                    <?php
                    if (!empty($hasil)) {
                        echo "<div class='alert alert-success'>durasi Anda: $hasil</div>";
                    }
                    ?>
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
