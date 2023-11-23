<?php
require_once 'koneksi.php';

// get total count of penyakit, gejala, riwayat, and pengguna from database
$sql = "SELECT COUNT(*) AS total FROM penyakit";
$result = mysqli_query($con, $sql);
$penyakitCount = mysqli_fetch_assoc($result)['total'];

$sql = "SELECT COUNT(*) AS total FROM gejala";
$result = mysqli_query($con, $sql);
$gejalaCount = mysqli_fetch_assoc($result)['total'];

$sql = "SELECT COUNT(*) AS total FROM riwayat";
$result = mysqli_query($con, $sql);
$riwayatCount = mysqli_fetch_assoc($result)['total'];

$sql = "SELECT COUNT(*) AS total FROM pengguna";
$result = mysqli_query($con, $sql);
$penggunaCount = mysqli_fetch_assoc($result)['total'];

// get data for the combined chart without Aturan
$sqlCombined = "SELECT 'Penyakit' AS label, COUNT(*) AS total FROM penyakit
                UNION
                SELECT 'Gejala' AS label, COUNT(*) AS total FROM gejala
                UNION
                SELECT 'Riwayat' AS label, COUNT(*) AS total FROM riwayat
                UNION
                SELECT 'Pengguna' AS label, COUNT(*) AS total FROM pengguna";

$resultCombined = mysqli_query($con, $sqlCombined);

$labelsCombined = [];
$dataCombined = [];

while ($row = mysqli_fetch_assoc($resultCombined)) {
    $labelsCombined[] = $row['label'];
    $dataCombined[] = $row['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Penyakit Kucing</title>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .box {
            margin: 20px 0;
            padding: 20px;
            background-color: #28a745;
            color: #fff;
            border-radius: 8px;
        }

        .box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .content-custom {
            text-align: center;
        }

        .chart-card {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chart-card canvas {
            width: 100%;
        }

        .stats-card {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .stats-card .card-body p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="box">
        <h2>Beranda</h2>
        <div class="content-custom">
            <h2>Sistem Pakar Diagnosa Penyakit Kucing Menggunakan Metode Forward Chaining</h2>
            <p class="lead">Sistem pakar adalah cabang dari ilmu kecerdasan buatan dan juga bidang ilmu yang muncul bersama perkembangan teknologi dan ilmu komputer. Sistem pakar merupakan sistem yang dirancang untuk dapat meniru keahlian seorang pakar di bidangnya untuk memodelkan kemampuan pemecahan masalah.<br/>
            <img src="assets/images/koceng.jpg">
            </p>
        </div>
    </div>

    <div class="chart-card">
        <div class="card-body">
            <h5 class="card-title">Jumlah Keseluruhan</h5>
            <canvas id="combinedChart"></canvas>
        </div>
    </div>

    <div class="stats-card">
        <div class="card-body">
            <h5 class="card-title">Statistik Keseluruhan</h5>
            <p>Jumlah Penyakit: <?php echo $penyakitCount; ?></p>
            <p>Jumlah Gejala: <?php echo $gejalaCount; ?></p>
            <p>Jumlah Riwayat: <?php echo $riwayatCount; ?></p>
            <p>Jumlah Pengguna: <?php echo $penggunaCount; ?></p>
        </div>
    </div>
</div>

<script>
    var combinedChart = new Chart(document.getElementById('combinedChart'), {
        type: 'line',
        data: {
            labels: <?php echo json_encode($labelsCombined); ?>,
            datasets: [{
                label: 'Jumlah',
                data: <?php echo json_encode($dataCombined); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>

