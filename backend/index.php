<?php

header('Content-Type: application/json');

//datos
$datos = [
    ['id' => 1, 'nombre' => 'Alma', 'descripcion' => 'Ariquitecta'],
    ['id' => 2, 'nombre' => 'Elay', 'descripcion' => 'Community Manager'],
    ['id' => 3, 'nombre' => 'Chimi', 'descripcion' => 'Maquillista'],
];

//enviar datos
echo json_encode($datos);
?>
