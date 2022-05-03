<?php
session_start();

if ( ! array_key_exists('fid', $_SESSION)) {
    header("Location: index.php", true, 302);
    exit;
}
if ( ! isset($_POST['nombre']) || ! isset($_POST['direccion']) || ! isset($_POST['habitaciones'])) {
    header("Location: dashboard.php?error=1", true, 302);
    exit;
}

$datas = file('alojatur_2021.csv');

foreach ($datas as $k => $data) {
    $datas[$k] = str_getcsv($data);
    if ($datas[$k][0] === $_SESSION['fid']) {
        $datas[$k][1]  = $_POST['nombre'];
        $datas[$k][16] = $_POST['direccion'];
        $datas[$k][17] = $_POST['habitaciones'];
    }
}

$fp = fopen('alojatur_2021.csv', 'w');
foreach ($datas as $data) {
    fputcsv($fp, $data);
}
fclose($fp);

header("Location: dashboard.php?success=1", true, 302);
