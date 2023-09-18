<?php
$dataMenu = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/menu"), true);
$dataTransaksi = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=" . $_GET['tahun']), true);

// Inisialisasi array untuk menyimpan total penjualan per bulan
$totalPenjualanPerBulan = [];
$tahun = $_GET['tahun'] ?? "2021";
$monthlySums = array_fill(1, 12, 0);

$totalTransaksi = count($dataTransaksi);
for ($i = 0; $i < $totalTransaksi; $i++) {
    $transaksi = $dataTransaksi[$i];
    $tanggal = strtotime($transaksi['tanggal']);
    $transaksiTahun = date('Y', $tanggal);

    // Filter berdasarkan tahun
    if ($transaksiTahun == $tahun) {
        $bulan = date('M', $tanggal);

        $totalPenjualanPerBulan[$tahun][$bulan][$transaksi['menu']] = ($totalPenjualanPerBulan[$tahun][$bulan][$transaksi['menu']] ?? 0) + $transaksi['total'];
    }
}

// Menghitung total pendapatan per menu
$totalPendapatanMenu = [];

// Memastikan $totalPenjualanPerBulan[$tahun] adalah array sebelum melakukan foreach
if (isset($totalPenjualanPerBulan[$tahun]) && is_array($totalPenjualanPerBulan[$tahun])) {
    foreach ($dataMenu as $menu) {
        $totalPendapatanMenu[$menu['menu']] = 0;
        foreach ($totalPenjualanPerBulan[$tahun] as $menuData) {
            $totalPendapatanMenu[$menu['menu']] += $menuData[$menu['menu']] ?? 0;
        }
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
    <!-- Bootstrap JS -->
    <script src="./bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <style>
        td,
        th {
            font-size: 11px;
        }
    </style>
    <title>Data Transaksi</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body" style="margin-bottom: -16px">
                <form action="index.php" method="get">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <select name="tahun" id="select" class="form-control">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2021"<?= $tahun == "2021" ? ' selected' : '' ?>>2021</option>
                                    <option value="2022"<?= $tahun == "2022" ? ' selected' : '' ?>>2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">
                                Tampilkan
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
            <?php
            // Tambahkan kondisi untuk menampilkan tabel hanya jika tahun dipilih
            if ($tahun) {
            ?>
            <div class="table-responsive text-nowrap" style="padding: 0rem 1rem;">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th rowspan="2" style="text-align:center; vertical-align: middle;">Menu</th>
                            <th colspan="12" style="text-align:center; vertical-align: middle;">Periode Pada <?= $tahun ?></th>
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

                        for ($i = 0; $i < count($dataMenu); $i++) {
                            $menu = $dataMenu[$i];
                            if ($menu['kategori'] === 'makanan') {
                                echo '<tr>';
                                echo '<td><a href="#" class="text-decoration-none list-unstyled text-dark" data-toggle="modal" data-target="#menuModal_' . $i . '">' . $menu['menu'] . '</a></td>';
                                echo '<div class="modal fade" id="menuModal_' . $i . '" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog modal-lg">';
                                echo '<div class="modal-content">';
                                echo '<div class="modal-header">';
                                echo '<h5 class="modal-title" id="menuModalLabel">' . $menu['menu'] . ' Detail Transaksi</h5>';
                                echo '<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>';
                                echo '</div>';
                                echo '<div class="modal-body">';
                                
                                // Tampilkan detail transaksi di sini, sesuaikan dengan struktur data Anda
                                foreach ($dataTransaksi as $transaksi) {
                                    if ($transaksi['menu'] === $menu['menu']) {
                                        echo '<p>Tanggal: ' . $transaksi['tanggal'] . '</p>';
                                        echo '<p>Total: ' . formatToRupiah($transaksi['total']) . '</p>';
                                        // Tambahkan informasi lain yang Anda inginkan
                                    }
                                }
                                
                                echo '</div>';
                                echo '<div class="modal-footer">';
                                echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                        
                                for ($j = 1; $j <= 12; $j++) {
                                    $bulan = date('M', strtotime("$tahun-$j-01"));
                                    $menuData = $totalPenjualanPerBulan[$tahun][$bulan] ?? [];
                        
                                    // Check if data exists and is not equal to 0, otherwise display nothing
                                    $income = $menuData[$menu['menu']] ?? 0;
                                    echo $income !== 0 ? '<td>' . formatToRupiah($income) . '</td>' : '<td></td>';
                                    $monthlySums[$j] += $income;
                                }
                        
                                // Display total income for each menu item
                                $totalIncome = $totalPendapatanMenu[$menu['menu']] ?? 0;
                                echo $totalIncome !== 0 ? '<td class="fw-bold">' . formatToRupiah($totalIncome) . '</td>' : '<td></td>';
                                echo '</tr>';
                            }
                        }
                        ?>

                        <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                        <?php
                        for ($i = 0; $i < count($dataMenu); $i++) {
                            $menu = $dataMenu[$i];
                            if ($menu['kategori'] === 'minuman') {
                                echo '<tr>';
                                echo '<td><a href="#" class="text-decoration-none list-unstyled text-dark" data-toggle="modal" data-target="#menuModal_' . $i . '">' . $menu['menu'] . '</a></td>';
                                echo '<div class="modal fade" id="menuModal_' . $i . '" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog modal-lg">';
                                echo '<div class="modal-content">';
                                echo '<div class="modal-header">';
                                echo '<h5 class="modal-title" id="menuModalLabel">' . $menu['menu'] . ' Detail Transaksi</h5>';
                                echo '<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>';
                                echo '</div>';
                                echo '<div class="modal-body">';
                                
                                // Tampilkan detail transaksi di sini, sesuaikan dengan struktur data Anda
                                foreach ($dataTransaksi as $transaksi) {
                                    if ($transaksi['menu'] === $menu['menu']) {
                                        echo '<p>Tanggal: ' . $transaksi['tanggal'] . '</p>';
                                        echo '<p>Total: ' . formatToRupiah($transaksi['total']) . '</p>';
                                        // Tambahkan informasi lain yang Anda inginkan
                                    }
                                }
                                
                                echo '</div>';
                                echo '<div class="modal-footer">';
                                echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';

                                for ($j = 1; $j <= 12; $j++) {
                                    $bulan = date('M', strtotime("$tahun-$j-01"));
                                    $menuData = $totalPenjualanPerBulan[$tahun][$bulan] ?? [];
                        
                                    // Check if data exists and is not equal to 0, otherwise display nothing
                                    $income = $menuData[$menu['menu']] ?? 0;
                                    echo $income !== 0 ? '<td>' . formatToRupiah($income) . '</td>' : '<td></td>';
                                    $monthlySums[$j] += $income;
                                }
                        
                                // Display total income for each menu item
                                $totalIncome = $totalPendapatanMenu[$menu['menu']] ?? 0;
                                echo $totalIncome !== 0 ? '<td class="fw-bold">' . formatToRupiah($totalIncome) . '</td>' : '<td></td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                    <tr class="table-dark">
                        <?php
                        // Display the monthly sums for all menu
                        echo '<tr class="table-dark">';
                        echo '<td>Total</td>';
                        for ($i = 1; $i <= 12; $i++) {
                            $monthlySum = formatToRupiah($monthlySums[$i]);
                            echo ($monthlySums !== 0 && $monthlySum !== '0') ? '<td class="fw-bold">' . $monthlySum . '</td>' : '<td></td>';
                        }
                        $totalMonthlySum = formatToRupiah(array_sum($monthlySums));
                        echo ($monthlySums !== 0 && $totalMonthlySum !== '0') ? '<td class="fw-bold">' . $totalMonthlySum . '</td>' : '<td></td>';
                        echo '</tr>';
                        ?>
                    </tr>
                </table>
            </div>
            <?php
            } else {
                echo '<div class="alert alert-info">Pilih tahun untuk menampilkan data.</div>';
            }
            ?>
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