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

$csv = [];
foreach ($datas as $data) {
    $csv[] = '"' . implode('","', $data) . '"'; // no es la mejor manera de hacerlo
}

$csv = implode("\n", $csv);
file_put_contents('alojatur_2021.csv', $csv);

header("Location: dashboard.php?success=1", true, 302);
