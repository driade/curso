<?php
    session_start();

    if (array_key_exists('fid', $_SESSION)) {
        /** COMPLETAR */
        // header (....)
    }
?>
<h1>Por favor introduzca su nombre de usuario y contraseña</h1>
<?php
    if (isset($_GET['error'])) {
        switch (/** COMPLETAR */) {
            case '1':
                // COMPLETAR
                break;
            case '2':
                // COMPLETAR
                break;
        }
        echo "<hr/>";
    }

    if (isset($_GET['success'])) {
        switch (/** COMPLETAR */) {
            case '1':
                echo "¡Vuelva pronto!";
                break;
        }
        echo "<hr/>";
    }
?>
<form method='POST' action='<!-- COMPLETAR -->'>
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type='text' name='name'/></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <!-- COMPLETAR -->
        </tr>
    </table>
    <hr/>
    <!-- COMPLETAR -->
</form>
