<?php
    session_start();

    if ( ! array_key_exists('fid', $_SESSION)) {
        header("Location: index.php", true, 302);
        exit;
    }

    $datas = file_get_contents('alojatur_2021.csv');
    $datas = explode("\n", $datas);

    $alojamiento = [];

    foreach ($datas as $data) {
        $data = str_getcsv($data);
        if ($data[0] === $_SESSION['fid']) {
            $alojamiento = $data;
            break;
        }
    }

    if ($alojamiento === []) {
        session_destroy();
        header("Location: index.php?error=2", true, 302);
        exit;
    }
?>
<h1><?php echo $alojamiento[1]; ?></h1>
<?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case '1':
                echo "Faltan datos";
                break;
        }
        echo "<hr/>";
    }

    if (isset($_GET['success'])) {
        switch ($_GET['success']) {
            case '1':
                echo "Datos grabados";
                break;
        }
        echo "<hr/>";
    }
?>
<form method='POST' action='grabar.php'>
    <table>
        <tr>
            <td>Etiqueta</td>
            <td><input type='text' name='etiqueta' value='<?php echo htmlentities($alojamiento[1]); ?>'/>
        </tr>
    </table>
    <hr/>
    <input type='submit' value='GRABAR'/>
</form>
<hr/>
<form method='POST' action='salir.php'>
    <input type='submit' value='SALIR'/>
</form>