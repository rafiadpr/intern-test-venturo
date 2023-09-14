<?php
$dataMenu = json_decode('[{"menu":"Nasi Goreng","kategori":"makanan"}, {"menu":"Mie Freno","kategori":"makanan"}, {"menu":"Nasi Teriyaki","kategori":"makanan"}, {"menu":"Nasi Ayam Katsu","kategori":"makanan"}, {"menu":"Nasi Goreng Mawut","kategori":"makanan"}, {"menu":"Teh Hijau","kategori":"minuman"}, {"menu":"Teh Lemon","kategori":"minuman"}, {"menu":"Teh","kategori":"minuman"}, {"menu":"Kopi Hitam","kategori":"minuman"}, {"menu":"Kopi Susu","kategori":"minuman"}]', true);

$dataTransaksi = json_decode('[{"tanggal":"2021-01-01","menu":"Nasi Goreng","total":50000},{"tanggal":"2021-01-01","menu":"Teh Lemon","total":15000},{"tanggal":"2021-01-01","menu":"Teh Hijau","total":20000},{"tanggal":"2021-01-01","menu":"Mie Freno","total":10000},{"tanggal":"2021-01-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-01-01","menu":"Teh","total":3000},{"tanggal":"2021-01-01","menu":"Mie Freno","total":30000},{"tanggal":"2021-01-01","menu":"Kopi Susu","total":3000},{"tanggal":"2021-01-01","menu":"Kopi Hitam","total":12000},{"tanggal":"2021-01-01","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2021-01-15","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-01-15","menu":"Teh Lemon","total":5000},{"tanggal":"2021-01-15","menu":"Teh Hijau","total":40000},{"tanggal":"2021-01-15","menu":"Teh","total":3000},{"tanggal":"2021-01-15","menu":"Nasi Ayam Katsu","total":40000},{"tanggal":"2021-01-15","menu":"Nasi Goreng","total":30000},{"tanggal":"2021-01-15","menu":"Kopi Susu","total":9000},{"tanggal":"2021-01-15","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-01-15","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-01-15","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-01-31","menu":"Nasi Ayam Katsu","total":20000},{"tanggal":"2021-01-31","menu":"Teh Lemon","total":15000},{"tanggal":"2021-01-31","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-01-31","menu":"Teh Lemon","total":15000},{"tanggal":"2021-01-31","menu":"Nasi Goreng","total":30000},{"tanggal":"2021-01-31","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-01-31","menu":"Kopi Susu","total":18000},{"tanggal":"2021-01-31","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-02-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-02-01","menu":"Teh","total":30000},{"tanggal":"2021-02-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-02-01","menu":"Mie Freno","total":20000},{"tanggal":"2021-02-01","menu":"Kopi Susu","total":21000},{"tanggal":"2021-02-01","menu":"Nasi Goreng","total":100000},{"tanggal":"2021-02-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-02-01","menu":"Teh Lemon","total":5000},{"tanggal":"2021-02-01","menu":"Nasi Goreng Mawut","total":39000},{"tanggal":"2021-02-01","menu":"Teh Lemon","total":10000},{"tanggal":"2021-02-01","menu":"Teh","total":6000},{"tanggal":"2021-02-15","menu":"Teh Hijau","total":50000},{"tanggal":"2021-02-15","menu":"Mie Freno","total":40000},{"tanggal":"2021-02-15","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-02-15","menu":"Teh Lemon","total":5000},{"tanggal":"2021-02-15","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-02-15","menu":"Kopi Susu","total":9000},{"tanggal":"2021-02-15","menu":"Nasi Teriyaki","total":26000},{"tanggal":"2021-02-15","menu":"Kopi Hitam","total":30000},{"tanggal":"2021-02-15","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-02-15","menu":"Kopi Hitam","total":12000},{"tanggal":"2021-02-28","menu":"Kopi Susu","total":3000},{"tanggal":"2021-02-28","menu":"Teh Lemon","total":25000},{"tanggal":"2021-02-28","menu":"Nasi Teriyaki","total":26000},{"tanggal":"2021-02-28","menu":"Kopi Susu","total":9000},{"tanggal":"2021-02-28","menu":"Teh Hijau","total":20000},{"tanggal":"2021-02-28","menu":"Teh","total":12000},{"tanggal":"2021-02-28","menu":"Teh","total":3000},{"tanggal":"2021-02-28","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-02-28","menu":"Teh Lemon","total":5000},{"tanggal":"2021-02-28","menu":"Nasi Goreng","total":40000},{"tanggal":"2021-03-01","menu":"Teh Lemon","total":10000},{"tanggal":"2021-03-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-03-01","menu":"Teh","total":9000},{"tanggal":"2021-03-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-03-01","menu":"Nasi Ayam Katsu","total":13000},{"tanggal":"2021-03-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-03-01","menu":"Teh Hijau","total":40000},{"tanggal":"2021-03-01","menu":"Teh","total":3000},{"tanggal":"2021-03-01","menu":"Nasi Teriyaki","total":26000},{"tanggal":"2021-03-01","menu":"Mie Freno","total":10000},{"tanggal":"2021-03-15","menu":"Kopi Hitam","total":9000},{"tanggal":"2021-03-15","menu":"Nasi Goreng","total":20000},{"tanggal":"2021-03-15","menu":"Teh","total":3000},{"tanggal":"2021-03-15","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-03-15","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-03-31","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-03-31","menu":"Mie Freno","total":40000},{"tanggal":"2021-03-31","menu":"Teh Hijau","total":50000},{"tanggal":"2021-03-31","menu":"Teh","total":3000},{"tanggal":"2021-03-31","menu":"Kopi Susu","total":9000},{"tanggal":"2021-03-31","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-03-31","menu":"Nasi Goreng Mawut","total":39000},{"tanggal":"2021-04-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-04-01","menu":"Teh","total":3000},{"tanggal":"2021-04-01","menu":"Mie Freno","total":10000},{"tanggal":"2021-04-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-04-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-04-01","menu":"Nasi Goreng","total":30000},{"tanggal":"2021-04-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-04-01","menu":"Mie Freno","total":10000},{"tanggal":"2021-04-01","menu":"Kopi Hitam","total":9000},{"tanggal":"2021-04-01","menu":"Nasi Goreng","total":20000},{"tanggal":"2021-04-01","menu":"Nasi Ayam Katsu","total":40000},{"tanggal":"2021-04-01","menu":"Kopi Susu","total":3000},{"tanggal":"2021-04-01","menu":"Nasi Ayam Katsu","total":30000},{"tanggal":"2021-04-15","menu":"Teh","total":9000},{"tanggal":"2021-04-15","menu":"Teh Lemon","total":5000},{"tanggal":"2021-04-15","menu":"Nasi Ayam Katsu","total":20000},{"tanggal":"2021-04-15","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-04-15","menu":"Teh","total":3000},{"tanggal":"2021-04-15","menu":"Kopi Susu","total":9000},{"tanggal":"2021-04-15","menu":"Kopi Hitam","total":12000},{"tanggal":"2021-04-15","menu":"Teh Hijau","total":50000},{"tanggal":"2021-04-15","menu":"Teh Hijau","total":20000},{"tanggal":"2021-04-15","menu":"Nasi Goreng","total":40000},{"tanggal":"2021-04-30","menu":"Teh","total":3000},{"tanggal":"2021-04-30","menu":"Mie Freno","total":50000},{"tanggal":"2021-04-30","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2021-04-30","menu":"Teh Hijau","total":10000},{"tanggal":"2021-04-30","menu":"Teh Hijau","total":10000},{"tanggal":"2021-04-30","menu":"Teh Hijau","total":80000},{"tanggal":"2021-04-30","menu":"Kopi Hitam","total":12000},{"tanggal":"2021-04-30","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-04-30","menu":"Kopi Hitam","total":9000},{"tanggal":"2021-04-30","menu":"Kopi Hitam","total":6000},{"tanggal":"2021-04-30","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-04-30","menu":"Teh","total":3000},{"tanggal":"2021-05-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-05-01","menu":"Mie Freno","total":30000},{"tanggal":"2021-05-01","menu":"Teh","total":3000},{"tanggal":"2021-05-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-05-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-05-01","menu":"Teh Lemon","total":10000},{"tanggal":"2021-05-15","menu":"Teh","total":3000},{"tanggal":"2021-05-15","menu":"Mie Freno","total":10000},{"tanggal":"2021-05-15","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-05-15","menu":"Teh","total":3000},{"tanggal":"2021-05-15","menu":"Teh Lemon","total":25000},{"tanggal":"2021-05-15","menu":"Nasi Teriyaki","total":30000},{"tanggal":"2021-05-15","menu":"Kopi Susu","total":3000},{"tanggal":"2021-05-15","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-05-15","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-05-15","menu":"Kopi Hitam","total":6000},{"tanggal":"2021-05-15","menu":"Kopi Susu","total":15000},{"tanggal":"2021-05-31","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-05-31","menu":"Teh Lemon","total":10000},{"tanggal":"2021-05-31","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-05-31","menu":"Teh Hijau","total":10000},{"tanggal":"2021-05-31","menu":"Kopi Susu","total":6000},{"tanggal":"2021-05-31","menu":"Teh","total":3000},{"tanggal":"2021-05-31","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2021-05-31","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-06-01","menu":"Teh Lemon","total":50000},{"tanggal":"2021-06-01","menu":"Kopi Hitam","total":1000},{"tanggal":"2021-06-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-06-01","menu":"Mie Freno","total":50000},{"tanggal":"2021-06-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-06-01","menu":"Kopi Susu","total":3000},{"tanggal":"2021-06-01","menu":"Nasi Goreng","total":5000},{"tanggal":"2021-06-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-06-01","menu":"Teh","total":3000},{"tanggal":"2021-06-15","menu":"Teh Hijau","total":10000},{"tanggal":"2021-06-15","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-06-15","menu":"Teh","total":30000},{"tanggal":"2021-06-15","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-06-15","menu":"Teh","total":3000},{"tanggal":"2021-06-15","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-06-15","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-06-15","menu":"Mie Freno","total":10000},{"tanggal":"2021-06-15","menu":"Teh Hijau","total":100000},{"tanggal":"2021-06-30","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-06-30","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-06-30","menu":"Kopi Susu","total":6000},{"tanggal":"2021-06-30","menu":"Nasi Goreng","total":40000},{"tanggal":"2021-06-30","menu":"Teh","total":3000},{"tanggal":"2021-06-30","menu":"Teh Hijau","total":10000},{"tanggal":"2021-06-30","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-06-30","menu":"Teh Hijau","total":20000},{"tanggal":"2021-06-30","menu":"Mie Freno","total":20000},{"tanggal":"2021-06-30","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-06-30","menu":"Teh","total":9000},{"tanggal":"2021-07-01","menu":"Teh","total":3000},{"tanggal":"2021-07-01","menu":"Kopi Susu","total":6000},{"tanggal":"2021-07-01","menu":"Teh Hijau","total":20000},{"tanggal":"2021-07-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2021-07-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-07-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-07-01","menu":"Teh","total":15000},{"tanggal":"2021-07-01","menu":"Nasi Goreng Mawut","total":39000},{"tanggal":"2021-07-01","menu":"Teh Hijau","total":20000},{"tanggal":"2021-07-01","menu":"Kopi Susu","total":6000},{"tanggal":"2021-07-01","menu":"Teh Lemon","total":25000},{"tanggal":"2021-07-01","menu":"Nasi Ayam Katsu","total":50000},{"tanggal":"2021-07-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-07-01","menu":"Teh Lemon","total":5000},{"tanggal":"2021-08-01","menu":"Nasi Goreng Mawut","total":78000},{"tanggal":"2021-08-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-08-01","menu":"Teh Lemon","total":10000},{"tanggal":"2021-08-01","menu":"Teh","total":18000},{"tanggal":"2021-08-01","menu":"Nasi Ayam Katsu","total":100000},{"tanggal":"2021-08-01","menu":"Nasi Ayam Katsu","total":30000},{"tanggal":"2021-08-01","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2021-08-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-08-01","menu":"Kopi Hitam","total":15000},{"tanggal":"2021-08-01","menu":"Teh","total":6000},{"tanggal":"2021-09-01","menu":"Kopi Susu","total":3000},{"tanggal":"2021-09-01","menu":"Teh","total":9000},{"tanggal":"2021-09-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-09-01","menu":"Nasi Goreng","total":40000},{"tanggal":"2021-09-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-09-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-09-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-09-01","menu":"Teh Hijau","total":30000},{"tanggal":"2021-09-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-09-01","menu":"Mie Freno","total":50000},{"tanggal":"2021-09-01","menu":"Mie Freno","total":10000},{"tanggal":"2021-09-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-09-01","menu":"Kopi Hitam","total":21000},{"tanggal":"2021-10-01","menu":"Nasi Ayam Katsu","total":30000},{"tanggal":"2021-10-01","menu":"Nasi Teriyaki","total":26000},{"tanggal":"2021-10-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-10-01","menu":"Teh Lemon","total":5000},{"tanggal":"2021-10-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-10-01","menu":"Teh","total":3000},{"tanggal":"2021-10-01","menu":"Teh","total":6000},{"tanggal":"2021-10-01","menu":"Mie Freno","total":40000},{"tanggal":"2021-10-01","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2021-10-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2021-11-01","menu":"Nasi Ayam Katsu","total":20000},{"tanggal":"2021-11-01","menu":"Teh Lemon","total":25000},{"tanggal":"2021-11-01","menu":"Kopi Hitam","total":15000},{"tanggal":"2021-11-01","menu":"Teh","total":3000},{"tanggal":"2021-11-01","menu":"Nasi Goreng","total":40000},{"tanggal":"2021-11-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-11-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-11-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-11-01","menu":"Teh Hijau","total":10000},{"tanggal":"2021-11-01","menu":"Kopi Susu","total":15000},{"tanggal":"2021-11-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-12-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-12-01","menu":"Teh","total":3000},{"tanggal":"2021-12-01","menu":"Nasi Goreng","total":30000},{"tanggal":"2021-12-01","menu":"Teh Hijau","total":30000},{"tanggal":"2021-12-01","menu":"Nasi Goreng Mawut","total":13000},{"tanggal":"2021-12-01","menu":"Kopi Susu","total":15000},{"tanggal":"2021-12-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2021-12-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2021-12-01","menu":"Teh","total":3000},{"tanggal":"2021-12-01","menu":"Nasi Ayam Katsu","total":10000},{"tanggal":"2022-01-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2022-01-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2022-01-01","menu":"Teh","total":12000},{"tanggal":"2022-01-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2022-01-01","menu":"Kopi Hitam","total":3000},{"tanggal":"2022-01-01","menu":"Mie Freno","total":20000},{"tanggal":"2022-01-01","menu":"Nasi Goreng","total":30000},{"tanggal":"2022-01-01","menu":"Nasi Goreng Mawut","total":26000},{"tanggal":"2022-01-01","menu":"Nasi Teriyaki","total":13000},{"tanggal":"2022-01-01","menu":"Nasi Goreng","total":10000},{"tanggal":"2022-01-01","menu":"Nasi Teriyaki","total":39000},{"tanggal":"2022-01-01","menu":"Kopi Hitam","total":3000}]', true);

// Inisialisasi array untuk menyimpan total penjualan per bulan
$totalPenjualanPerBulan = [];
$tahun = $_GET['tahun'] ?? "2021";
$totalPendapatanPerBulan = [];
$monthlySums = array_fill(1, 12, 0);

// Loop melalui data transaksi dan menghitung total penjualan per bulan
foreach ($dataTransaksi as $transaksi) {
    $tanggal = strtotime($transaksi['tanggal']);
    $transaksiTahun = date('Y', $tanggal);

    // Filter berdasarkan tahun
    if ($transaksiTahun == $tahun) {
        $bulan = date('M', $tanggal);

        $totalPenjualanPerBulan[$tahun][$bulan][$transaksi['menu']] = ($totalPenjualanPerBulan[$tahun][$bulan][$transaksi['menu']] ?? 0) + $transaksi['total'];
    }
}

// Inisialisasi array untuk menyimpan total pendapatan per menu
$totalPendapatanMenu = [];

// Menghitung total pendapatan per menu
foreach ($dataMenu as $menu) {
    $totalPendapatanMenu[$menu['menu']] = 0;
    foreach ($totalPenjualanPerBulan[$tahun] as $menuData) {
        $totalPendapatanMenu[$menu['menu']] += $menuData[$menu['menu']] ?? 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <title>Data Transaksi</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body">
                <form action="index.php" method="get">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <select name="tahun" id="select" class="form-control">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2021" selected="">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Tampilkan
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
            <div class="table-responsive text-nowrap">
                <table id="" class="table table-striped table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th rowspan="2" style="text-align:center; vertical-align: middle;">Menu</th>
                            <th colspan="12" style="text-align:center; vertical-align: middle;">Periode Pertahun</th>
                            <th rowspan="2" style="text-align:center; vertical-align: middle;">Total</th>
                        </tr>
                        <tr class="table-dark">
                            <th style="text-align: center;">Jan</th>
                            <th style="text-align: center;">Feb</th>
                            <th style="text-align: center;">Mar</th>
                            <th style="text-align: center;">Apr</th>
                            <th style="text-align: center;">Mei</th>
                            <th style="text-align: center;">Jun</th>
                            <th style="text-align: center;">Jul</th>
                            <th style="text-align: center;">Agu</th>
                            <th style="text-align: center;">Sep</th>
                            <th style="text-align: center;">Okt</th>
                            <th style="text-align: center;">Nov</th>
                            <th style="text-align: center;">Des</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                        <?php
                        function formatToRupiah($number) {
                            return '' . number_format($number, 0, ',', ',');
                        }
                        foreach ($dataMenu as $menu) {
                            if ($menu['kategori'] === 'makanan') {
                                echo '<tr>';
                                echo '<td>' . $menu['menu'] . '</td>';

                                // Display monthly sales for each menu item
                                foreach ($totalPenjualanPerBulan[$tahun] as $bulan => $menuData) {
                                    // Check if data exists, otherwise display 0
                                    $income = $menuData[$menu['menu']] ?? 0;
                                    echo '<td>' . formatToRupiah($menuData[$menu['menu']] ?? 0) . '</td>';
                                    $monthNumber = date('n', strtotime($bulan));
                                    $monthlySums[$monthNumber] += $income;
                                }

                                // Display total income for each menu item
                                echo "<td>" . formatToRupiah($totalPendapatanMenu[$menu['menu']]) . " </td>";

                                echo '</tr>';
                            }
                        }
                        ?>
                        <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                        <?php
                        foreach ($dataMenu as $menu) {
                            if ($menu['kategori'] === 'minuman') {
                                echo '<tr>';
                                echo '<td>' . $menu['menu'] . '</td>';

                                // Display monthly sales for each menu item
                                foreach ($totalPenjualanPerBulan[$tahun] as $bulan => $menuData) {
                                    // Check if data exists, otherwise display 0
                                    $income = $menuData[$menu['menu']] ?? 0;
                                    echo '<td>' . formatToRupiah($menuData[$menu['menu']] ?? 0) . '</td>';
                                    $monthNumber = date('n', strtotime($bulan));
                                    $monthlySums[$monthNumber] += $income;
                                }

                                // Display total income for each menu item
                                echo "<td>" . formatToRupiah($totalPendapatanMenu[$menu['menu']]) . "</td>";

                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                    <tr class="table-dark">
                        <td>Total</td>
                        <?php
                        // Display the monthly sums
                        echo '<tr>';
                        echo '<td class="table-secondary"><b>Total per Bulan</b></td>';
                        for ($i = 1; $i <= 12; $i++) {
                            echo '<td>' . formatToRupiah($monthlySums[$i]) . '</td>';
                        }
                        echo '<td>' . formatToRupiah(array_sum($monthlySums)) . '</td>';
                        echo '</tr>';
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Inisialisasi DataTables
            $('#data-table').DataTable();
        });
    </script>
</body>
</html>