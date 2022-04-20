<?php

    function compruebaDNI(string $nif): bool
    {
        if (strlen($nif) !== 9) {
            return false;
        }
        $numeros = substr($nif, 0, 8);
        $letra   = strtoupper($nif[8]);

        return substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra;
    }

    $nif       = '';
    $resultado = null;

    if (isset($_GET['dni'])) {
        $nif = $_GET['dni'];
        if (compruebaDNI($_GET['dni'])) {
            $resultado = "El DNI es correcto";
        } else {
            $resultado = "El DNI no es correcto";
        }
    }
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class='container mt-4'>
            <div class='row'>
                <div class='col-4 offset-4'>
                    <div class='card'>
                        <div class='card-header'>
                            <div class='card-title'>Por favor introduzca un DNI para validar</div>
                        </div>
                        <div class='card-body'>
                            <form method='GET' action='valida_dni.php'>
                                <div class="row">
                                    <div class="col-8">
                                        <input type='text' name='dni' class='form-control' minlength="9" maxlength="9" value="<?php echo htmlentities($nif); ?>"/>
                                    </div>
                                    <div class="col-4">
                                        <input type='submit' value='VALIDAR' class='btn btn-primary'/>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <?php echo $resultado; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>