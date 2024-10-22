<?php
//silahkan jawab disini (menangkap data dari form)
$lama_olahraga = "";

if ($_POST) {
    $lama_olahraga = $_POST["exercise"];
}

//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)

    if ($lama_olahraga == 100) {
        $hasil = "Anda terlalu sigma, boleh makan nasi padang";
    } elseif ($lama_olahraga > 50 && $lama_olahraga <= 100) {
        $hasil = "Anda sangat sigma, boleh makan nasi 15 sendok";    
    } elseif ($lama_olahraga > 15 && $lama_olahraga <= 50) {
        $hasil = "Anda lumayan sigma, boleh makan nasi 5 sendok";
    } elseif ($lama_olahraga > 0 && $lama_olahraga <= 15) {
        $hasil = "Hell no, Tidak boleh makan nasi"; 
    } else {
        $hasil = "Anda tidak boleh makan malam, olahraga 5 menit dahulu";
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
                <!-- silahkan jawab disini (menampilkan hasil logika berdasarkan kondisi olahraga) -->
                <?= 
                    $hasil;
                ?>
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
