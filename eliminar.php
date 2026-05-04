<?php
function eliminar($lista){
    echo"ID a eliminar:";
    $id=(int)readline();
    for($i=0;$i<count($lista);$i++) {
        if($lista[$i]["id"]===$id) {
           unset($lista[$i]);
            $lista=array_values($lista);
            echo"Eliminado\n";
            return;
        }
    }
    echo"No encontrado"; 
}