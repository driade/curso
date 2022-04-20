<?php

$notas = [
    'Juan'  => ['notas' => [9, 8, 6]],
    'María' => ['notas' => [3, 4, 5]],
    'Marta' => ['notas' => [1, 2]],
];

$usuarios = [
    ['nombre' => 'María', 'edad' => 16],
    ['nombre' => 'Juan', 'edad' => 24],
    ['nombre' => 'Marta', 'edad' => 26],
];

foreach ($usuarios as $clave => $usuario) {
    foreach ($notas as $clave2 => $datos) {
        if ($usuario['nombre'] === $clave2) {
            $usuarios[$clave]['notas'] = $datos["notas"];
        }
    }
}

print_r($usuarios);
