<?php
    session_start();

    if ( ! array_key_exists('fid', $_SESSION)) {
        /** COMPLETAR **/
        // header
    }

    $datas = file_get_contents('alojatur_2021.csv');
    $datas = explode("\n", $datas);

    $alojamiento = [];

    foreach ($datas as $data) {
        $data = str_getcsv($data);
        if ($data[0] === $_SESSION['fid']) {
            /** COMPLETAR **/
            break;
        }
    }

    if ($alojamiento === []) {
        session_destroy();
        header("Location: index.php?error=2", true, 302);
    }
?>
<h1><?php echo htmlentities($alojamiento[1]); ?></h1>
<?php
    if (isset($_GET['error'])) {
        switch (/** COMPLETAR **/) {
            case '1':
                echo "Faltan datos";
                break;
        }
        echo "<hr/>";
    }

    if (isset($_GET['success'])) {
        switch (/** COMPLETAR **/) {
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
            <!-- COMPLETAR -->
        </tr>
    </table>
    <hr/>
    <input type='submit' value='GRABAR'/>
</form>
<hr/>
<form method='POST' action='<!-- COMPLETAR -->'>
    <input type='submit' value='SALIR'/>
</form>