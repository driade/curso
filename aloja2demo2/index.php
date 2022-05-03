<?php
    session_start();

    if (array_key_exists('fid', $_SESSION)) {
        header("Location: dashboard.php", true, 302);
        exit;
    }
?>
<h1>Por favor introduzca su nombre de usuario y contraseña</h1>
<?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case '1':
                echo "Lo sentimos, nombre de usuario / contraseña inválidos";
                break;
            case '2':
                echo "Lo sentimos, ha ocurrido un error";
                break;
        }
        echo "<hr/>";
    }

    if (isset($_GET['success'])) {
        switch ($_GET['success']) {
            case '1':
                echo "¡Hasta pronto!";
                break;
        }
        echo "<hr/>";
    }
?>
<form method='POST' action='validar.php'>
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type='text' name='name'/></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type='password' name='password'/></td>
        </tr>
    </table>
    <hr/>
    <input type='submit' name='ENTRAR'/>
</form>
