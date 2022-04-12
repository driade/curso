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

foreach ($usuarios as &$usuario) {
    foreach ($notas as $clave => $datos) {
        if ($usuario['nombre'] === $clave) {
            $usuario['notas'] = $datos["notas"];
        }
    }
}

print_r($usuarios);
