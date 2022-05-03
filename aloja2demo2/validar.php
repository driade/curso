<?php
session_start();

if (array_key_exists('fid', $_SESSION)) {
    header("Location: dashboard.php", true, 302);
    exit;
}

if ( ! isset($_POST['name']) || ! isset($_POST['password'])) {
    header("Location: index.php", true, 302);
    exit;
}

$datas = file('alojatur_2021.csv');

foreach ($datas as $data) {
    $data = str_getcsv($data);
    if ($data[1] === $_POST['name'] && $_POST['password'] === '1234') {
        $_SESSION['fid'] = $data[0];
        header("Location: dashboard.php", true, 302);
        exit;
    }
}
header("Location: index.php?error=1", true, 302);
