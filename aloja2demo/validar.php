<?php
session_start();

if (array_key_exists('fid', $_SESSION)) {
    /** COMPLETAR */
    // header (....)
}

if ( ! isset($_POST['name']) || /** COMPLETAR **/)) {
    header("Location: index.php", true, 302);
}

$datas = file_get_contents('alojatur_2021.csv');
$datas = explode("\n", $datas);

foreach ($datas as $data) {
    $data = /** COMPLETAR **/
    if (/** COMPLETAR **/ === $_POST['name'] && $_POST['password'] === '1234') {
        $_SESSION['fid'] = $data[0];
        /** COMPLETAR **/
        // header...
    }
}
header("Location: index.php?error=1", true, 302);
