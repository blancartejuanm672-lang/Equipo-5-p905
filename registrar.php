<?php
function registrar(!$lista) {
    echo "ID";
    $id=(int)readline();
    for($i=0;$i<count($lista);$i++){
        if($lista[$i]["id"]===$id) {
            echo"ID ya existe\n";
            return;
        }
    }
    echo"titulo:";
    $titulo=readline();
    echo"plataforma:";
    $plataforma=readline();
    echo"genero:";
    $genero=readline();
    echo"estado:";
    $estado=readline();
    $lista[]=[
        "id"=>$id,
        "titulo"=>$titulo,
        "plataforma"=>$plataforma,
        "genero"=>$genero,
        "estado"=>$estado
     ];
     echo"Registrado!\n";
}