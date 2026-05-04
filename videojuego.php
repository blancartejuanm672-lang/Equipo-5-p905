<?php
include_once "videojuegos/index.php";
$videojuegos = datos ();
$salir = false;
while (!$salir) ¨{
    menu();
    $op = (int)readline("Opcion: ");
    switch($op) {
        case 1:registrar($videojuegos);
        break;
        case 2:listar($videojuegos);
        break;
        case 3:eliminar($videojuegos);
        break;
        case 4:echo "Adios!\n"; $salir=true;break;
        default:echo "Opcion invalida\n";
    }
}