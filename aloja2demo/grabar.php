<?php
session_start();

if ( ! array_key_exists('fid', $_SESSION)) {
    /** COMPLETAR **/
        // header
}
if ( ! isset($_POST['etiqueta']) || /** COMPLETAR **/) {
    /** COMPLETAR **/
    // header
}

$datas = file_get_contents('alojatur_2021.csv');
$datas = explode("\n", $datas);

foreach ($datas as $k => $data) {
    $datas[$k] = str_getcsv($data);
    if ($datas[$k][0] === $_SESSION['fid']) {
        /** COMPLETAR **/
    }
}

$fp = fopen('alojatur_2021.csv', 'w');
foreach ($datas as $data) {
    fputcsv($fp, $data);
}
fclose($fp);

header("Location: dashboard.php?success=1", true, 302);
