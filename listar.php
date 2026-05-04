<?php
function listar($lista) {
    echo"\nLISTA DE VIDEOJUEGOS\n";
    if(count($lista)===0) {
        echo"No hay datos\n";
        return
    }
    for($i=0;$i<count($lista);$i++) {
        echo"---------\n";
        echo"ID:".$lista[$i]['id']."\n";
        echo"titulo:".$lista[$i]['titulo']."\n";
        echo"plataforma:".$lista[$i]['plataforma']."\n";
        echo"genero:".$lista[$i]['genero']."\n";
        echo"estado:".$lista[$i]['estado']."\n";
    }
    echo"\nPresiona Enter...";
    readline();
}