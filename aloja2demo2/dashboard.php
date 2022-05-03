<?php
    session_start();

    if ( ! array_key_exists('fid', $_SESSION)) {
        header("Location: index.php", true, 302);
        exit;
    }

    $datas = file('alojatur_2021.csv');

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
    }
?>
<h1><?php echo htmlentities($alojamiento[1]); ?></h1>
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
            <td>Nombre</td>
            <td><input type='text' name="nombre" value="<?php echo $alojamiento[1]; ?>"/>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><input type='text' name="direccion" value="<?php echo $alojamiento[16]; ?>"/>
        </tr>
        <tr>
            <td>Habitaciones</td>
            <td><input type='text' name="habitaciones" value="<?php echo $alojamiento[17]; ?>"/>
        </tr>
    </table>
    <hr/>
    <input type='submit' value='GRABAR'/>
</form>
<hr/>
<form method='POST' action='salir.php'>
    <input type='submit' value='SALIR'/>
</form>